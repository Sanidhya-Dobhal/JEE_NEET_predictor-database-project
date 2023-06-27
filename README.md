# JEE_NEET_predictor-database-project
This is a database project in php and sql . <br>
 <br>
 The website is designed to provide an estimate of a student's percentile score in the Joint Entrance Examination (JEE) or National Eligibility cum Entrance Test (NEET) based on their inputted marks.The main objective of this project is that a user would be able to assess their performance with respect to all the other users who have used the website for assessing their performance and gives the percentile with respect to other users . 
 <br>
 In doing so the user can extrapolate this percentile and predict their percentile in the actual exam.<br>
 ## Features
This project has the following features
<br>
### User registration :
The user first creates an account and gets an <b>auto generated registration number</b> which is to be used to log in to the website .
### Input Marks: 
Users  input their subject-wise marks obtained in JEE or NEET examination based on which exam they choose while registering .
### Conditional Update :
If user has already entered the marks and again enters a set of marks then the marks of that user will only be updated if the new total is greater than all the other totals that the user has so far entered . The inspiration behind conditional input was the fact that in JEE mains the highest score of the user is considered .
### Percentile calculation :
The overall percentile based on the total of all the subjects along with the percentiles in individual subject is calculated by comparing individual marks and total marks the user with the individual marks and total marks of all the other users who have so far entered their marks in the website .
### Result Display :
The prediction whether the user has qualified or not ,is displayed based on the overall percentile and the overall percentile and percentile in each subject is displayed in a report-card like format .
### Garbage value handling :
In this value the garbage value inputs have been considered and an appropriate output for them has been generated .
### Responsive design and visually pleasant :
The website is designed to be responsive and accessible on various devices, including desktops, tablets, and mobile phones and also be visually pleasant in all the devices (using CSS <b>animations</b> and <b>transitions</b>).

## Screenshots
### Login page
<img src = "Screenshots/Log in page.png">
<br>
<img src = "Screenshots/Logging in user.png">
<br>
<img src = "Screenshots/Incorrect credentials.png">

### Sign up page
<img src = "Screenshots/Registration form.png">
<br>
<img src = "Screenshots/Successful registration.png">

### Home page 
<img src ="Screenshots/successful_login_home_page.png" >
<br>
<img src = "Screenshots/Home page.png">

### Marks entry
<img src = "Screenshots/Sub_marks.png">
<br>
<img src = "Screenshots/marks entry.png">
<br>
<img src ="Screenshots/Successful marks stored.png">
<br>
<img src ="Screenshots/Better Score.png">
<br>
<img src ="Screenshots/Worse score.png">
<br>

### Result page
<img src = "Screenshots/Result page.png">
<br>
<img src = "Screenshots/Not qualified.png">
<br>
<img src = "Screenshots/Marks not entered.png">

## Installation and Usage
First you need to install XAMPP and properly set it up (probably look up for a tutorial or something)
<br>
Then clone or save this repository in a folder ,which can be named JEE_NEET_website
<br>
Now save this folder in XAMPP -> xamppfiles -> htdocs
<br>
If you have correctly installed XAMPP , You have to now go to your browser and go to http://localhost/phpmyadmin/ ,this is where you will maintain your database .
<br>Now create a database strictly named JEE/NEET
<br>Now create the 3 tables ,strictly named <b>Cand_reg, JEE_marks</b> and <b>NEET_marks</b>
Inside these table add the following attributes
<br>

### Cand_reg :
<img src ="Screenshots/Cand_reg attributes.png">

### JEE_marks :

<img src ="JEE_marks table.png" style = "height:225px;"> 

### NEET_marks :

<img src ="NEET_marks table.png" style = "height:225px;"> 

After doing all this <b>open your project</b> by using the <b>url</b> http://localhost/JEE_NEET_website/ 

If everything was done correctly ,then this project is ready to execute in your system 
## Technologies Used
The JEE/NEET Percentile Predictor Website is built using the following technologies:

### Front-end: 
HTML , CSS,
### Back-end: 
PHP , MySQL
## Contact
If you have any questions, suggestions, or feedback, please feel free to contact the project maintainer:

### Email: sanidhyadobhal2002@gmail.com
### GitHub: Sanidhya-Dobhal

