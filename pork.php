<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>www.porkshop.co.ke</title>
    <link rel="stylesheet" href="pork.css" />
    <script src="pork.js" defer></script>
    <script src="https://kit.fontawesome.com/b1e55971fd.js" crossorigin="anonymous"></script>
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0"
    />
  </head>
  <body>
    <header>
      <nav class="navbar">
        <a class="logo" href="#">THE PORK SHOP<span>.</span></a>
        <ul class="menu-links">
          <span id="close-menu-btn" class="material-symbols-outlined">X</span>
          <li><a href="#">Home</a></li>
          <li><a href="#food-menu">Menu</a></li>
          <li><a href="#about">About us</a></li>
          <li><a href="#location">Location</a></li>
          <li><a href="#contact">Contact us</a></li>
        </ul>
        <span id="hamburger-btn" class="material-symbols-outlined">menu</span>
      </nav>
    </header>
    <section class="hero-section">
      <div class="content">
        <h2>Enjoy your day with a bite of the best Pork in Town.</h2>
        <p>
          Pork is a popular and beloved meal enjoyed by people around the world.
          Awaken your senses with a tinge bite of noble perfection.
        </p>
        <div class="bton">
          <button class="login-btn">Log In</button>
        </div>
      </div>
    </section>
    <div class="blur-bg-overlay"></div>
    <div class="form-popup">
      <span class="close-btn material-symbols-rounded">X</span>
      <div class="form-box login">
        <div class="form-details">
          <h2>Welcome Back</h2>
          <p>
            Please log in using your personal information to stay connected with
            us.
          </p>
        </div>
        <div class="form-content">
        <form action = "connect.inc.php" method="post">
          <h2>LOGIN</h2>
            <div class="input-field">
              <input type="text" name="email" required />
              <label>Email</label>
            </div>
            <div class="input-field">
              <input type="password" name="password" required />
              <label>Password</label>
            </div>
            <a href="#" class="forgot-pass-link">Forgot password?</a>
            <button type="submit" name = "signIn">Log In</button>
          </form>
          <div class="bottom-link">
            Don't have an account?
            <a href="#" id="signup-link">Signup</a>
          </div>
        </div>
      </div>
      <div class="form-box signup">
        <div class="form-details">
          <h2>Create Account</h2>
          <p>
            To become a part of our community, please sign up using your
            personal information.
          </p>
        </div>
        <div class="form-content">
          <h2>SIGNUP</h2>
          <form action = "connect.inc.php" method="post">
            <div class="input-field">
              <input type="text" name="email" required />
              <label>Enter your email</label>
            </div>
            <div class="input-field">
              <input type="password" name="password" required />
              <label>Create password</label>
            </div>
            <div class="policy-text">
              <input type="checkbox" id="policy" />
              <label for="policy">
                I agree the
                <a href="#" class="option">Terms & Conditions</a>
              </label>
            </div>
            <button type="submit" name="signUp">Sign Up</button>
          </form>
          <div class="bottom-link">
            Already have an account?
            <a href="#" id="login-link">Login</a>
          </div>
        </div>
      </div>
    </div>
  </form>
    <section class="about" id="about">
      <h1>About Us</h1>
      <p style="font-weight: bold">
        The Pork Shop is the Leading Pork Provider..
      </p>
      <div class="about-info">
        <div class="about-img">
          <img src="images/logo-color.png" />
        </div>
        <div>
          <p>
            The Pork Shop is a restaurant located in Naivasha and is the leading
            Pork Provider in Naivasha. Offering a variety of sumptuous meals
            from Fried Pork to Grilled Goat meat, This is surely the place to
            visit to more than satisfy your tummy's needs.
          </p>
        </div>
      </div>
    </section>
          <section id="food-menu">
            <div class="menumain">
            <h2 class="food-menu-heading">Food Menu</h2>
            <div class="food-menu-container container">
                <div class="food-menu-item">
                    <div class="food-img">
                        <img src="images/istockphoto-531464366-170667a.webp" alt="img error"/>
                    </div>
                    <div class="food-description">
                        <h2 class="food-titile">Pork Choma</h2>
                        <p>
                          Eleganty grilled and marinated pork with a tinge of Rosemary
                        </p>
                        <p class="food-price">Price: Ksh </p>
                    </div>
                </div>
                <div class="food-menu-item">
                    <div class="food-img">
                        <img src="./images/jose-ignacio-pompe-s-Z-h0fEiBM-unsplash.jpg" alt="img error"/>
                    </div>
                    <div class="food-description">
                        <h2 class="food-titile">Mbuzi Choma</h2>
                          <p>
                            Crispy grilled goat meat bolstering with flavour
                          </p>
                        <p class="food-price">Price: Ksh </p>
                    </div>
                </div>
                <div class="food-menu-item">
                    <div class="food-img">
                        <img src="images/pork fry 2.jpg" alt="img error" />
                    </div>
                    <div class="food-description">
                        <h2 class="food-titile">Pork Fry</h2>
                        <p>
                            Flavoury and juicy pork fried to near perfection
                        </p>
                        <p class="food-price">Price: Ksh </p>
                    </div>
                </div>
                <div class="food-menu-item">
                    <div class="food-img">
                        <img src="images/goat fry.jpg" alt="image error" />
                    </div>
                    <div class="food-description">
                        <h2 class="food-titile">Mbuzi Fry</h2>
                        <p>
                            Juicy,Tender goat meat dipped and lathered in marination
                        </p>
                        <p class="food-price">Price: Ksh </p>
                    </div>
                </div>
                <div class="food-menu-item">
                    <div class="food-img">
                        <img src="images/ugali greens.jpg" alt="image error" />
                    </div>
                    <div class="food-description">
                        <h2 class="food-titile">Ugali & Greens</h2>
                        <p>
                            Classic Ugali served with a side of greens such as kales
                        </p>
                        <p class="food-price">Price: Ksh </p>
                    </div>
                </div>
                <div class="food-menu-item">
                    <div class="food-img">
                        <img src="./images/cola.jpg" alt="image error" />
                    </div>
                    <div class="food-description">
                        <h2 class="food-titile">Beverages</h2>
                        <p>
                            Soft drinks e.g Coca Cola,Fanta and water
                        </p>
                        <p class="food-price">Price: Ksh </p>
                    </div>                    
                </div>
                <article class="note"><p>*Pork and Goat served with a side of ugali and or greens and kachumbari</p></article>
            </div>
          </div>
        </section>
        <section>
          <div class="location">
          <div class="ffbox"> 
            <div class="ffbox1"> 
                <h1 class="gfg">The Pork Shop Naivasha</h1> 
                <h2>Contact Us</h2> 
                <form> 
                    <label for="fullName"> 
                        <i class="fa fa-solid fa-user" 
                           style="margin: 2px;"> 
                        </i> Full Name: 
                    </label> 
                    <input type="text" 
                           id="fullName" 
                           name="fullName" required> 
      
                    <label for="email"> 
                        <i class="fa fa-solid fa-envelope" 
                           style="margin: 2px;"> 
                        </i> 
                        Email Address: 
      
                    </label> 
                    <input type="email"
                           id="email" 
                           name="email" required> 
      
                    <label for="mobile"> 
                        <i class=" fa fa-solid fa-phone" 
                           style="margin: 2px;"> 
                        </i> 
                        Contact No: 
                    </label> 
                    <input type="tel"
                           id="mobile" 
                           name="mobile" required> 
      
                    <label for="msg"> 
                        <i class=" fa fa-solid fa-comment" 
                           style="margin: 2px;"> 
                        </i> 
                        Write Message: 
                    </label> 
                    <textarea id="msg" 
                              name="msg" 
                              rows="5" required> 
                    </textarea> 
      
                    <button type="submit"> 
                        Submit 
                    </button> 
                </form> 
            </div> 
            <div class="map-div" id="location"> 
              <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7979.006414849164!2d36.4341!3d-0.720107!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x18291703707e28fd%3A0x226935c7f8d8ecdf!2sThe%20Pork%20Shop%20Naivasha!5e0!3m2!1sen!2ske!4v1718622173964!5m2!1sen!2ske" 
              width="400" height="450" style="border:0;" allowfullscreen="" 
              loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
              
            </div> 
        </div> 
        </div>
        </section>
        <br>
        <footer>
          <h1 id="contact">Find Us on</h1>
          <article class="footertext">
            <p>
              We are located along Moi Avenue Road on <i>Kariuki Chotara Rd</i> adjascent
              to Naivas Ndogo Supemarket. Come one come all and have a delicious meal that 
              will definitely tickle your belly :) .
            </p>
          </article>
         <h2>Socials:</h2>
         <div class="socials">
          <p>Find me at</p>
          <span class="fb"><i class="fa-regular fa-envelope"></i> z.wairimungugi@gmail.com</span>
         <span class="fb"><i class="fa-brands fa-facebook"></i> @Zipporah Ngugi</span>
         <p>OR</p>
         <p>Call/Whatsapp on</p>
         <span class="fb"><i class="fa-solid fa-phone"></i> 0722275801</span>
         <span class="fb"> <i class="fa-brands fa-whatsapp"></i> 0722275801</span>
                <hr>
        <p>copyright &copy; www.porkshop.co.ke 2019</p>
      </div>
        </footer>
  </body>
</html>