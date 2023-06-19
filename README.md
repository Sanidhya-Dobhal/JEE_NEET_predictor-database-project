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
The website is designed to be responsive and accessible on various devices, including desktops, tablets, and mobile phones and also be visually pleasant in all the devices .

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
