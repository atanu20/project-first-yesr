from flask import Flask, render_template,request,session,redirect,url_for,flash
from flask_sqlalchemy import SQLAlchemy
from datetime import datetime
from werkzeug.utils import secure_filename
import os
# from flask_mysqldb import MySQL
import flask_whooshalchemy as wa
# import flask.ext.sqlalchemy as flask_sqlalchemy

app = Flask(__name__)
app.secret_key = 'the-atanu'
app.config["upload"]="C:\\Users\\atanu\\PycharmProjects\\Blog-site\\static\\img"
app.config["SQLALCHEMY_DATABASE_URI"] = "mysql://root:@localhost/blogger"
# app.config['SQLALCHEMY_TRACK_MODIFICATIONS'] = True
app.config["WHOOSH_BASE"]="whoosh"

app.config['MYSQL_HOST'] = "localhost"
app.config['MYSQL_USER'] = "root"
app.config['MYSQL_PASSWORD'] = ""
app.config['MYSQL_DB'] = "blogger"

# mysql = MySQL(app)


db = SQLAlchemy(app)


class Contacts(db.Model):

    id = db.Column(db.Integer, primary_key=True)
    name = db.Column(db.String(80), nullable=False)
    email = db.Column(db.String(20), nullable=False)
    message = db.Column(db.String(120), nullable=False)
    date = db.Column(db.String(12), nullable=True)


class Blogg(db.Model):
    __searchable__ =["title"]

    id= db.Column(db.Integer, primary_key=True)
    title = db.Column(db.String(80), nullable=False)
    author = db.Column(db.String(120), nullable=False)
    image = db.Column(db.String(50), nullable=False)
    content = db.Column(db.String(120), nullable=False)
    date = db.Column(db.String(12), nullable=True)
    # img_file = db.Column(db.String(20), nullable=True)


wa.whoosh_index(app,Blogg)

class Comment(db.Model):

    id = db.Column(db.Integer, primary_key=True)
    cname = db.Column(db.String(80), nullable=False)
    ccomment = db.Column(db.String(120), nullable=False)
    date = db.Column(db.String(12), nullable=True)


@app.route("/")
def home():

    return render_template("index.html")


@app.route("/about")
def about():

    return render_template("about.html")

@app.route("/blog")
def blog():

    bo= Blogg.query.order_by(Blogg.date.desc()).all()[0:2]
    # post = Blogg.query.filter_by().all()
    post= Blogg.query.all()
    com = Comment.query.order_by(Comment.date.desc()).all()
    # print(bo)
    return render_template("blog.html",bo=bo,post=post,com=com)





@app.route("/search",methods = ['GET'])
def search():

    # bo= Blogg.query.order_by(Blogg.date.desc()).all()[0:2]
    bo=Blogg.query.whoosh_search(request.form.get("Bsearch")).all()
    # bo = Blogg.query.whoosh_search('blogg').all()
    # post = Blogg.query.filter_by().all()
    post= Blogg.query.all()
    com = Comment.query.order_by(Comment.date.desc()).all()

    print(bo)


    return render_template("search.html",bo=bo,post=post,com=com)
    # else:
    #     return "lorem Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo"






# search not work*********




@app.route("/contact", methods = ['GET', 'POST'])
def contact():
    if (request.method == 'POST'):
        '''Add entry to the database'''
        name = request.form.get('name')
        email = request.form.get('email')
        # number = request.form.get('number')
        message = request.form.get('message')
        entry = Contacts(name=name,email=email, message=message, date=datetime.now() )
        db.session.add(entry)
        db.session.commit()
        # mail.send_message('New message from ' + name,
        #                   sender=email,
        #                   recipients=[params['gmail-user']],
        #                   body=message + "\n" + number
        #                   )

    return render_template("index.html")

@app.route("/post/<string:post_title>", methods=['GET'])
def post_route(post_title):
    pos=Blogg.query.filter_by(title=post_title).first()

    return render_template("post.html",pos=pos)


@app.route("/login",methods = ['GET', 'POST'])
def login():

    if ("user" in session) and (session["user"]=="Atanu"):
        posts = Blogg.query.filter_by().all()
        flash("You are logged in")
        return render_template("dashboard.html",posts=posts,username="Atanu")


    if (request.method == 'POST'):
        username =request.form.get('name')
        userpass = request.form.get('pass')
        if (username=="Atanu") and (userpass =="jana12"):
            session["user"]=username
            posts = Blogg.query.filter_by().all()
            flash("You are logged in")
            return render_template("dashboard.html",posts=posts,username=username)

    flash("You are not logged in")
    return render_template("login.html")


@app.route('/add', methods = ['GET', 'POST'])
def add():
    login()

    if (request.method == 'POST'):
        title = request.form.get('title')
        author = request.form.get('author')
        image = request.form.get('image')
        content = request.form.get('content')
        # img_file = request.form.get('img_file')

        post = Blogg(title=title, author=author,image=image, content=content,date=datetime.now())
        db.session.add(post)
        db.session.commit()
        # flash("Content added Successfully")


    # return redirect(url_for('index'))
    flash("Content added Successfully")
    return render_template("add.html")

@app.route("/delete/<string:id>", methods=['GET','POST'])
def delete(id):
    if ("user" in session) and (session["user"] =="Atanu"):
        post = Blogg.query.filter_by(id=id).first()
        db.session.delete(post)
        db.session.commit()
        flash("Content Deleted Successfully")
    return redirect("/login")

@app.route("/logout")
def logout():
    session.pop("user")
    # return redirect("/login")
    flash("You are not logged in")
    return render_template("index.html")


@app.route("/uploader",methods = ['GET', 'POST'])
def uploader():
    if ("user" in session) and (session["user"] == "Atanu"):
        if (request.method == 'POST'):
            f=request.files["image"]
            f.save(os.path.join(app.config["upload"],secure_filename(f.filename)))
            flash("image uploaded Successfully")
            # return render_template("afteradd.html")
            return "image uploaded Successfully"


@app.route("/edit/<string:id>", methods=['GET','POST'])
def edit(id):
    if ("user" in session) and (session["user"] =="Atanu"):
        if (request.method == 'POST'):
            title = request.form.get('title')
            author = request.form.get('author')
            image = request.form.get('image')
            content = request.form.get('content')

            # if no!='0':
            post = Blogg.query.filter_by(id=id).first()
            post.title = title
            post.author = author
            post.image = image
            post.content = content
            post.date = datetime.now()
            db.session.add(post)
            db.session.commit()
            flash("Content updated Successfully")
            return redirect("/edit/" + id)


        postpos = Blogg.query.filter_by(id=id).first()
        # flash("Content updated Successfully")
        return render_template("edit.html", postpos=postpos)



@app.route("/commt", methods = ['GET', 'POST'])
def commt():

    if (request.method == 'POST'):
        '''Add entry to the database'''
        cname = request.form.get('cname')
        ccomment = request.form.get('ccomment')
        entry = Comment(cname=cname,ccomment=ccomment, date=datetime.now() )
        db.session.add(entry)
        db.session.commit()
        # flash("Your Message posted Successfully")
        return "<h3>Your Message posted successfully</h3>"

        # mail.send_message('New message from ' + name,
        #                   sender=email,
        #                   recipients=[params['gmail-user']],
        #                   body=message + "\n" + number
        #                   )

    # return render_template("post.html")



app.run(debug=True)