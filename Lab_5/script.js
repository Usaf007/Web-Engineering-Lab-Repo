    // Task 1: Create an object with at least three key-value pairs. Then, use a loop to print each key and its corresponding value in an HTML table. The values should be displayed inside input text boxes.
    
    // Creating the object
        var person = {
            firstName: "waheed",
            lastName: "xyz",
            age: 20
        };

        document.write("<table border='1'>");
        document.write("<tr><th>Key</th><th>Value</th></tr>");

        for (var key in person) {
            document.write("<tr>");
            
            // Printing the key (e.g., firstName)
            document.write("<td>" + key + "</td>"); 
            
            // Printing the value inside an input text box
            document.write("<td><input type='text' value='" + person[key] + "'></td>"); 
            
            document.write("</tr>");
        }

        document.write("</table>");

    // Task 2: Create a simple calculator that takes two numbers as input and displays their sum when a button is clicked. Use JavaScript to perform the addition and display the result in a third textbox.
    
    function calculate() {
      const val1 = document.getElementById('num1').value;
      const val2 = document.getElementById('num2').value;
      const num1 = parseInt(val1);
      const num2 = parseInt(val2);
      const resultBox = document.getElementById('result');

      if (val1 === '' && val2 === '') {
        resultBox.value = '';
      } else {
        resultBox.value = num1 + num2;
      }
    }


    // Task 3: Create a dropdown menu with a few options. When the user selects an option, replace the dropdown with a textbox that displays the selected option.

    function replaceDropdown() {
            // Target the container and replace its HTML content with a textbox
            document.getElementById("entryContainer").innerHTML = '<input type="text">';
        }

    // Task 4: Create a form with fields for name, email, address, login ID, password, and a checkbox for agreeing to a policy. Implement JavaScript validation to ensure that all fields are filled out before allowing the form to be submitted. Display appropriate error messages next to each field if validation fails.

    function validation() {
            // First, clear any previous error messages
            document.getElementById("nameErr").innerHTML = "";
            document.getElementById("emailErr").innerHTML = "";
            document.getElementById("addErr").innerHTML = "";
            document.getElementById("loginErr").innerHTML = "";
            document.getElementById("passErr").innerHTML = "";
            document.getElementById("chkErr").innerHTML = "";

            // Validation Logic following the instructor's if-else ladder
            if(document.getElementById("name").value == "") {
                document.getElementById("nameErr").innerHTML = "Please fill Name field";
                return false;
            }
            else if(document.getElementById("email").value == "") {
                document.getElementById("emailErr").innerHTML = "Please fill Email field";
                return false;
            }
            else if(document.getElementById("add").value == "") {
                document.getElementById("addErr").innerHTML = "Please fill Address field";
                return false;
            }
            else if(document.getElementById("login").value == "") {
                document.getElementById("loginErr").innerHTML = "Please fill Login ID field";
                return false;
            }
            else if(document.getElementById("pass").value == "") {
                document.getElementById("passErr").innerHTML = "Please fill Password field";
                return false;
            }
            else if(!document.getElementById("chk").checked) {
                document.getElementById("chkErr").innerHTML = "Please agree with Policy";
                return false;
            }
            
            // If all fields are filled, allow submission
            return true;
        }

    // Task 5: Create a textarea where users can input text. When the user highlights a portion of the text and clicks a button, display the highlighted text in a separate div with a different background color.

    function displaySelected() {
            // 1. Target the text box
            var txtBox = document.getElementById("myText");
            
            // 2. Extract exactly what the user highlighted using substring
            var highlightedText = txtBox.value.substring(txtBox.selectionStart, txtBox.selectionEnd);
            
            // 3. Inject the highlighted text into the colored div
            document.getElementById("outputDiv").innerHTML = highlightedText;
        }