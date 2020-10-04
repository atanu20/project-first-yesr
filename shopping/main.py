from flask import Flask, render_template,request,redirect,session,flash

import mysql.connector
from werkzeug.utils import secure_filename
from datetime import datetime
import os



app = Flask(__name__)
app.secret_key = os.urandom(24)
app.config["upload"]="C:\\Users\\atanu\\PycharmProjects\\shopping\\static\\img"


# app.config["SQLALCHEMY_DATABASE_URI"] = "mysql://root:@localhost/pythonsw6"
# db = SQLAlchemy(app)

conn=mysql.connector.connect(host="localhost",user="root",password="",db="pythonsw6")
cursor=conn.cursor()


admin_name="atanu"
admin_pass="jana12"


@app.route("/")
def home():

    return render_template("index.html")

@app.route("/about")
def about():

    return render_template("about.html")


@app.route("/login")
def login():

    return render_template("sign.html")

@app.route("/home")
def mainn():
    cursor.execute("SELECT * FROM `dress`")
    dresss = cursor.fetchall()[:3]
    cursor.execute("SELECT * FROM `electronics`")
    elc = cursor.fetchall()[:3]



    if 'username' in session:
        return render_template("main.html", dresss=dresss,elc=elc)
    else:
        return redirect("/login")








@app.route("/register")
def register():


    return render_template("register.html")

@app.route("/validation",methods=['POST','GET'])
def validation():
    email=request.form.get('email')
    pas = request.form.get('pas')

    cursor.execute(f" SELECT * FROM `account` WHERE email='{email}' AND pas = '{pas}'  ")
    # cursor.execute(f" SELECT * FROM `account` WHERE email='ata@gmail.com'")

    users = cursor.fetchall()
    # print(users[0][1])
    if len(users)>0:
        session['username']=users[0][1]
        nuser=session['username']
        print(nuser)
        return redirect("/home")
        # return render_template("main.html",nuser=nuser)



    else:
        return redirect("/login")


@app.route("/newaccout",methods=['POST','GET'])
def newaccout():
    user = request.form.get('user')
    email=request.form.get('email')
    tel = request.form.get('tel')
    pas = request.form.get('pas')
    date = datetime.now()

    cursor.execute(f" INSERT INTO `account`( `user`, `email`, `tel`, `pas`, `date`) VALUES ('{user}','{email}','{tel}','{pas}','{date}')  ")
    # cursor.execute(f" SELECT * FROM `account` WHERE email='ata@gmail.com'")


    conn.commit();
    return redirect("/login")


@app.route("/dress")
def dress():
    cursor.execute("SELECT * FROM `dress`")
    dresss= cursor.fetchall()
    return render_template("dress.html",dresss=dresss)


@app.route("/electronics")
def electronics():
    cursor.execute("SELECT * FROM `electronics`")
    elc= cursor.fetchall()
    return render_template("electronics.html",elc=elc)




@app.route("/addtocart/<string:name>", methods=['GET'])
def addtocart(name):
    cursor.execute(f"SELECT * FROM `dress` WHERE name='{name}'")
    dresss= cursor.fetchall()
    print(dresss)
    return render_template("addtocard.html",dresss=dresss)

@app.route("/order_electronics/<string:name>", methods=['GET'])
def order_electronics(name):
    cursor.execute(f"SELECT * FROM `electronics` WHERE name='{name}'")
    dresss= cursor.fetchall()
    print(dresss)
    return render_template("addtocard.html",dresss=dresss)



@app.route("/orderr",methods=['POST'])
def orderr():
    dressname = request.form.get('dressname')
    amount = request.form.get('amount')
    pices = request.form.get('pices')
    user = request.form.get('user')
    mail = request.form.get('mail')
    password = request.form.get('password')
    number = request.form.get('number')
    address = request.form.get('address')
    date = datetime.now()

    cursor.execute(f"INSERT INTO `ordercard`(`dressname`, `amount`, `pices`, `user`, `mail`, `password`, `number`, `address`, `date`) VALUES ('{dressname}','{amount}','{pices}','{user}','{mail}','{password}','{number}','{address}','{date}')")
    conn.commit()
    return redirect("/home")

@app.route("/contact",methods=['POST'])
def contact():
    name= request.form.get('name')
    email = request.form.get('email')
    message = request.form.get('message')
    date = datetime.now()

    cursor.execute(f"INSERT INTO `contacts`(`name`, `email`, `message`, `date`) VALUES ( '{name}','{email}','{message}','{date}'  )")
    conn.commit()
    return redirect("/home")



#ADMIN PATH*************







@app.route("/adminlogin",methods = ['GET', 'POST'])
def adminlogin():
    if ("user" in session) and (session["user"] == admin_name):
        flash("You are logged in")
        return render_template("dashboard.html",username=admin_name)




    username = request.form.get('name')
    userpass = request.form.get('pass')
    if (username == admin_name) and (userpass == admin_pass):
        session["user"] = username
        flash("You are logged in")
        return render_template("dashboard.html",username=admin_name)

    flash("You are not logged in")
    return render_template("adminlogin.html")


@app.route("/logout")
def logout():
    session.pop("user")
    # return redirect("/login")
    # flash("You are not logged in")

    return redirect("/home")


# ***DRESS ADMIN PART***********

@app.route("/dressadmin")
def dressadmin():
    cursor.execute("SELECT * FROM `dress`")
    dresss = cursor.fetchall()
    return render_template("dressadmin.html", dresss=dresss)



@app.route("/delete/<string:id>", methods=['GET','POST'])
def delete(id):
    cursor.execute(f"DELETE FROM `dress` WHERE  id='{id}'")
    conn.commit()
    return redirect("/dressadmin")


@app.route("/newdress")
def newdress():


    return render_template("adddress.html")


@app.route("/adddress",methods = ['GET', 'POST'])
def adddress():
    # adminlogin()
    name = request.form.get('name')
    image = request.form.get('image')
    price = request.form.get('price')

    cursor.execute(f"INSERT INTO `dress`(`name`, `image`, `price`) VALUES (  '{name}','{image}','{price}' )")
    conn.commit()
    return redirect("/newdress")


@app.route("/uploader",methods = ['GET', 'POST'])
def uploader():
    if ("user" in session) and (session["user"] == admin_name):
        if (request.method == 'POST'):
            f=request.files["image"]
            f.save(os.path.join(app.config["upload"],secure_filename(f.filename)))
            flash("image uploaded Successfully")
            # return render_template("afteradd.html")
            return redirect("/adminlogin")



@app.route("/editdress/<string:id>", methods=['GET','POST'])
def editdress(id):
    if ("user" in session) and (session["user"] == admin_name):
        if (request.method == 'POST'):
            name = request.form.get('name')
            image = request.form.get('image')
            price = request.form.get('price')

            cursor.execute(f"UPDATE `dress` SET name='{name}',image='{image}',price='{price}' WHERE id='{id}'")
            conn.commit()
            return redirect("/dressadmin")

        cursor.execute(f"SELECT * FROM `dress` WHERE  id='{id}'")
        dresss = cursor.fetchall()
        return render_template("editdress.html",dresss=dresss)


#DRESS PART END**
#ELECTRIC ADMIN******
@app.route("/electicadmin")
def electicadmin():
    cursor.execute("SELECT * FROM `electronics`")
    dresss = cursor.fetchall()
    return render_template("electicadmin.html", dresss=dresss)


@app.route("/newelectronic")
def newelectronic():


    return render_template("addelectric.html")



@app.route("/addelectric",methods = ['GET', 'POST'])
def addelectric():
    # adminlogin()
    name = request.form.get('name')
    image = request.form.get('image')
    price = request.form.get('price')

    cursor.execute(f"INSERT INTO `electronics`(`name`, `image`, `price`) VALUES (  '{name}','{image}','{price}' )")
    conn.commit()
    return redirect("/newelectronic")


@app.route("/deleteele/<string:id>", methods=['GET','POST'])
def deleteele(id):
    cursor.execute(f"DELETE FROM `electronics` WHERE  id='{id}'")
    conn.commit()
    return redirect("/electicadmin")


@app.route("/editelectric/<string:id>", methods=['GET','POST'])
def editelectric(id):
    if ("user" in session) and (session["user"] == admin_name):
        if (request.method == 'POST'):
            name = request.form.get('name')
            image = request.form.get('image')
            price = request.form.get('price')

            cursor.execute(f"UPDATE `electronics` SET name='{name}',image='{image}',price='{price}' WHERE id='{id}'")
            conn.commit()
            return redirect("/electicadmin")

        cursor.execute(f"SELECT * FROM `electronics` WHERE  id='{id}'")
        dresss = cursor.fetchall()
        return render_template("editelectric.html",dresss=dresss)

# if __name__=="__main__":

app.run(debug=True)