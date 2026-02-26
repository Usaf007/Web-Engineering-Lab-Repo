// Task 1
//document.write("This message is from the EXTERNAL file.<br>");

// Task 2
//Function definition with two parameters
// function addIntegers(num1, num2) {
//     var sum = num1 + num2;
//     document.write("The sum of " + num1 + " and " + num2 + " is: " + sum);
//     document.write("<br><br>");
// }

// addIntegers(10, 20);
// addIntegers(55, 45);

// Task 3
//1. x = y + 1 ...Result = 3
// document.write("x = y + 1 ...Result = " + 3 + "<br>");

// // 2. x += y ...Result = 6
// document.write("x += y ...Result = " + 6 + "<br>");

// //3. x -= y ...Result = 3
// document.write("x -= y ...Result = " + 3 + "<br>");

// //4. x *= y ...Result = 9
// document.write("x *= y ...Result = " + 9 + "<br>");

// // 5. x /= y ...Result = 3
// document.write("x /= y ...Result = " + 3 + "<br>");


// Task 4
// Prompting the user for 3 integers
// var num1 = prompt("Enter the first integer:");
// var num2 = prompt("Enter the second integer:");
// var num3 = prompt("Enter the third integer:");

// // Converting strings to Numbers to perform calculation
// var n1 = Number(num1);
// var n2 = Number(num2);
// var n3 = Number(num3);

// // Calculating Sum and Average
// var sum = n1 + n2 + n3;
// var average = sum / 3;

// // Displaying the result in a dialogue box message (Alert)
// alert("The Sum is: " + sum + "\nThe Average is: " + average);



// Task 5
//1. Write the Big Heading first
// document.write("<h1>Choose a Programming Course:</h1>");

// //2. Create the array
// var courses = ["Web Engineering", "Software Construction", "Machine Learning"];

// // 3. Start the dropdown
// document.write("<select>");

// // 4. Loop through array to add options
// courses.forEach(function (item) {
//   document.write("<option>" + item + "</option>");
// });

// // 5. Close the dropdown
// document.write("</select>");


// Task 6
// 1. Collect Data
    // var regNum = prompt("Enter Registration Number:");
    // var name = prompt("Enter Student Name:");
    // var webEng = Number(prompt("Enter Web Engineering Marks:"));
    // var compProg = Number(prompt("Enter Computer Programming Marks:"));
    // var oop = Number(prompt("Enter OOP Marks:"));
    // var dsa = Number(prompt("Enter DSA Marks:"));
    // var ai = Number(prompt("Enter AI Marks:"));

    // // 2. Calculations
    // var totalObtained = webEng + compProg + oop + dsa + ai;
    // var percentage = (totalObtained / 500) * 100;
    // var grade = "";

    // // 3. Grading Logic
    // if (percentage >= 80) { grade = "A"; }
    // else if (percentage >= 70) { grade = "B"; }
    // else if (percentage >= 60) { grade = "C"; }
    // else if (percentage >= 50) { grade = "D"; }
    // else { grade = "F"; }

    // // 4. Horizontal Table Output
    // document.write("<h1>Student Result Sheet</h1>");
    // document.write("<table border='1' width='100%'>"); // Basic border and full width
    
    // // Header Row
    // document.write("<tr>");
    // document.write("<th>Reg #</th><th>Name</th><th>Web</th><th>CP</th><th>OOP</th><th>DSA</th><th>AI</th><th>Total</th><th>%</th><th>Grade</th>");
    // document.write("</tr>");
    
    // // Data Row
    // document.write("<tr>");
    // document.write("<td>" + regNum + "</td>");
    // document.write("<td>" + name + "</td>");
    // document.write("<td>" + webEng + "</td>");
    // document.write("<td>" + compProg + "</td>");
    // document.write("<td>" + oop + "</td>");
    // document.write("<td>" + dsa + "</td>");
    // document.write("<td>" + ai + "</td>");
    // document.write("<td>" + totalObtained + "</td>");
    // document.write("<td>" + percentage + "%</td>");
    // document.write("<td>" + grade + "</td>");
    // document.write("</tr>");
    
    // document.write("</table>");


// Task 7

//1. Defining the four basic math functions
function add(a, b) { return a + b; }
function subtract(a, b) { return a - b; }
function multiply(a, b) { return a * b; }
function divide(a, b) { return a / b; }

// 2. Creating an Object to map operators to functions (The "No If-Else" solution)
var operations = {
    "+": add,
    "-": subtract,
    "*": multiply,
    "/": divide
};

// 3. Prompting the user for input
var num1 = Number(prompt("Enter the first operand:"));
var operator = prompt("Enter the operator (+, -, *, /):");
var num2 = Number(prompt("Enter the second operand:"));

// 4. Calling the corresponding function and alerting the result
// We use the 'operator' variable as a key to find the function in our 'operations' object
var result = operations[operator](num1, num2);

alert("The result of " + num1 + " " + operator + " " + num2 + " is: " + result);