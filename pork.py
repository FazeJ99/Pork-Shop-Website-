from flask import Flask, request, redirect, render_template,session
import pymysql
from pymysql import IntegrityError

app = Flask(__name__)   
app.secret_key = "something_secret"

# Database connection    
db = pymysql.connect(
    host = "localhost",
    user = "faze",
    password = "12345",
    database  = "porkshop"
)
cursor  = db.cursor()

@app.route('/')
def home():
    return render_template('pork.html')

@app.route('/login', methods=['GET', 'POST'])
def login():
    if request.method == 'POST':
        email = request.form.get('email')
        password = request.form.get('password')
    
        try: 
            cursor.execute("SELECT * FROM users WHERE email = %s AND password = %s" , (email,password))
            user = cursor.fetchone()
        finally:
            if user:
                session["id"] = user[0]
                return """Login Successful <br>
                        Return to <a href="/">Home</a>"""
            else:
                return "Invalid Credentials"
    return render_template('pork.html')
        
        
@app.route('/signup', methods=['GET' , 'POST'])
def signup():
    if request.method == 'POST':
        email = request.form['email']   
        password = request.form['password']
    
        try:
            cursor.execute("INSERT INTO users (email , password) VALUES (%s , %s)" , (email,password))
            db.commit()
            return '''  
                Signup Successful <br>
                <a href="/login">Go to Login</a>'''
        except IntegrityError as e:
            if e.args[0] == 1062:
                return """
                Email already exists
                <br>
                <a href="/signup">Go back to Signup</a>
                """
            else:
                "An error occurred"
        except Exception as e:
            return f"Error: {str(e)}"
    return render_template('pork.html')
    
if __name__ == "__main__":
    app.run(debug = True)