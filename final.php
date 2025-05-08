<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!DOCTYPE html>
<html lang="en">
<head>
    <title>V.I.P</title>
    <link rel="stylesheet" href="style1.css">
    <style>
        .about-us-section {
    max-width: 59%;
    margin: 0 auto;
    padding: 30px;
    background: transparent;
    border-radius: 15px;
    border: 1px solid	#FFA500;
    box-shadow: 0 4px 15px rgba(0,0,0,0.1);
    text-align: center;
    margin-top:50px;
  }
  
  .member-photos {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 20px;
  }
  
  .member {
    width: 150px;
    height: 150px;
    border-radius: 50%;
    overflow: hidden;
    border: 4px solid #e0e0e0;
    box-shadow: 0 4px 10px rgba(0,0,0,0.2);
  }
  
  .member img {
    width: 100%;
    height: 100%;
    object-fit: cover;
  }
  
  /* 🎯 Control individual image positions inside the circle */
  
  /* Sanjana */
  .member.top img {
    object-position: center 10%; /* Move up */
  }
  
  /* Shubha */
  .member.bottom:nth-child(2) img {
    object-position: center 40%; /* Slight down */
  }
  
  /* Tej */
  .member.bottom:nth-child(3) img {
    object-position: center 20%; /* Slight up */
  }
  
  /* Mariya */
  .member.bottom:nth-child(4) img {
    object-position: center bottom; /* Move to bottom */
  }
  
  /* Last Member (member3.jpg) */
  .member.bottom:nth-child(5) img {
    object-position: center 35%; /* Balanced */
  }
  .about-description {
    text-align: justify;
    font-size: 16px;
    line-height: 1.6;
    color: white;
  }
  
  .about-description strong {
    color: white;
  }
  .news-section {
    position: absolute;
    right: 30px;
    top: -50px;
    width: 28%;
    height: 500px; /* Increased height */
    border: 2px solid 	#FFA500; /* Gold border */
    color: white;
    padding: 15px 20px;
    border-radius: 15px;
    font-size:15px;
    section-shadow: 0 0 15px rgba(0,0,0,0.4);
    font-family: Arial, sans-serif;
    z-index: 1000;
    overflow-y: auto; /* Adds scrolling if content exceeds height */
    scrollbar-width: thin; /* Make the scrollbar thin */
    scrollbar-color: rgba(255, 255, 255, 0.5) transparent; /* Transparent scrollbar */
}

.news-section h3 {
    margin-bottom: 15px;
    font-size: 18px;
    color: 	#FFA500;
    text-align: center;
}

.news-section ul {
    list-style-type: "➤ ";
    padding-left: 20px;
}

.news-section li {
    margin-bottom: 10px;
    margin-bottom: 15px; /* Increased spacing between headlines */
}

.news-section a {
    color: #ffffff;
    text-decoration: none;
    transition: color 0.3s;
}

.news-section a:hover {
    color: 	#FFA500;
    text-decoration: underline;
}

.news-scroll-container {
    height: 420px;
    overflow: hidden;
    position: relative;
}

.news-scroll-container ul {
    list-style: none;
    margin: 0;
    padding: 0;
}

.news-scroll-container li {
    padding: 0;
    margin: 0;
    color: white;
    font-size: 16px;
    line-height: 2; /* Adjust line spacing if needed */
}

.scroll-wrapper {
    display: flex;
    flex-direction: column;
    animation: scroll-loop 6s linear infinite;
}

/* Keyframe: Scroll up then pause */
@keyframes scroll-loop {
    0% {
        transform: translateY(0%);
    }
    90% {
        transform: translateY(-50%);
    }
    100% {
        transform: translateY(-50%);
    }
}

.news-section ul li {
    margin-bottom: 10px;
}

.scroll-wrapper {
    display: flex;
    flex-direction: column;
    animation: scroll-up-seamless 25s linear infinite;
}

@keyframes scroll-up-seamless {
    0% { transform: translateY(0); }
    100% { transform: translateY(-50%); }
}

.feedbackForm
{
    top: -100px;
}
 
</style>
</head>
<body>

    <div class="main">
        <div class="logo">
            <img src="images/logo.png" alt="Logo">
        </div>
        <div class="navbar">
            <div class="menu">
                <ul>
                    <li><a href="final.php">HOME</a></li>
                    <li>
                        <a href="#" class="toggle-submenu">SGPA/CGPA</a>
                        <ul class="submenu">
                            <li><a href="sgpa.php">SGPA</a></li>
                            <li><a href="cgpa.php">CGPA</a></li>
                        </ul>
                    </li>
                    <li><a href="https://results.vtu.ac.in/indexD4J5.php">RESULTS</a></li>
                    <!--<li><a href="upload1.php">UPLOAD</a></li>-->
                    <li><a href="#" id="aboutUsLink">ABOUT US</a></li>
                </ul>
            </div>

        <!--   <div class="search">
                <input class="srch" type="search" name="" placeholder="Find Your Course">
                <a href="#"><button class="btn">Search</button></a>
            </div> -->
        </div>

        <div class="container1">
    <div class="content">
        <h1>Welcome To<br><span>VTU</span> <br>Instant Prep</h1>
        <br>
        <pre class="par">
<b><span style="font-size:20px; color:white;">VIP</span></b> – Your One-Stop Resource Hub! Access study materials, PYQs, timetables, 
and syllabus all in one place for easy learning and exam preparation. 🚀
No more searching all over the internet – everything you need is right here, in one place.
        </pre>
        <button class="cn" id="joinButton"><a href="#">GET IN</a></button>
    </div>
    <?php include 'news.php'; ?>

  <!--  <div class="news-box">
        <h3>📢 Latest Headlines</h3>
        <ul>
            <li><a href="https://example.com/news1" target="_blank">University application deadline extended to March 31, 2025</a></li>
            <li><a href="https://example.com/news2" target="_blank">Postgraduate admission closes on March 10, 2025</a></li>
            <li><a href="https://example.com/news3" target="_blank">Final date for merit scholarship applications: May 31, 2025</a></li>
            <li><a href="https://example.com/news4" target="_blank">Check the status of your 2023–24 scholarship applications</a></li>
            <li><a href="https://example.com/news5" target="_blank">Deadline for OBC student scholarships: May 31, 2025</a></li>
            <li><a href="https://example.com/news6" target="_blank">Click here to download the "Neelaya" student portal software</a></li>
            <li><a href="https://example.com/news7" target="_blank">VTU Library – Your One-Stop Resource Hub!</a></li>
            <li><a href="https://example.com/news8" target="_blank">Access study materials, PYQs, timetables, and syllabus all in one place for easy learning and exam preparation.</a></li>
        </ul>
    </div>-->
</div>
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            // Handle submenu toggling
            const toggleSubmenus = document.querySelectorAll(".toggle-submenu");

            toggleSubmenus.forEach(toggle => {
                toggle.addEventListener("click", function (e) {
                    e.preventDefault();
                    document.querySelectorAll(".submenu").forEach(submenu => {
                        if (submenu !== this.nextElementSibling) {
                            submenu.style.display = "none";
                        }
                    });
                    const submenu = this.nextElementSibling;
                    submenu.style.display = submenu.style.display === "block" ? "none" : "block";
                    e.stopPropagation();
                });
            });

            document.addEventListener("click", function () {
                document.querySelectorAll(".submenu").forEach(submenu => {
                    submenu.style.display = "none";
                });
            });

            // Hide old content and show new content
            const joinButton = document.getElementById("joinButton");
            const container1 = document.querySelector(".container1");

            const newContentContainer = document.createElement("div");
            newContentContainer.classList.add("new-content");
            newContentContainer.style.display = "none"; // Initially hidden
            newContentContainer.style.color = "white"; // Ensure the text is visible
            newContentContainer.style.padding = "20px";
            newContentContainer.style.marginTop = "6%";
            newContentContainer.style.marginLeft = "6%";
            newContentContainer.style.backgroundColor = "transparent"; // Semi-transparent background
            newContentContainer.innerHTML = `<div class="main">
                <h2 style="margin-left:37.7%; margin-bottom: 20px; margin-top: 30px; font-family: Arial, Helvetica, sans-serif;">STUDY MATERIALS</h2>

    <!-- Table with filters -->
                    <div style="position: relative;">

                    <!-- Feedback Button -->
                    <div id="feedbackBtnContainer" style="position: absolute; top: -230px; right: 0;">
                    <button onclick="showFeedback()" style="padding: 10px 20px; background-color: orange; color: black; width:120px; border: none;font-size:16px; border-radius: 5px; cursor: pointer;">
                    Feedback
                    </button>
                    </div>

                    <table border="1">
                            <tr>
                                <th>Scheme</th>
                                <th>Department</th>
                                <th>Semester</th>
                                <th>Subject</th>
                                <th>Category</th>
                            </tr>
                            <tr>
                                <td>
                                    <select id="scheme" onchange="updateDepartments()">
                                        <option value="">Select Scheme</option>
                                        <option value="2021">2021</option>
                                        <option value="2022">2022</option>
                                    </select>
                                </td>
                                <td>
                                    <select id="Department" disabled onchange="updateSemesters()">
                                        <option value="">Select Department</option>
                                    </select>
                                </td>
                                <td>
                                    <select id="semester" disabled onchange="updateSubjects()">
                                        <option value="">Select Semester</option>
                                    </select>
                                </td>
                                <td>
                                    <select id="subject" disabled onchange="updateCategories()">
                                        <option value="">Select Subject</option>
                                    </select>
                                </td>
                                <td>
                                    <select id="category" disabled>
                                        <option value="">Select Category</option>
                                    </select>
                                </td>
                            </tr>
                        </table>
                        <br>
                        <div id="searchButtonContainer">
                    <button onclick="search()">Search</button>
                    </div>

                        <div id="modulesContainer" style="display: none;">
                            
                            <button onclick="getPDF('1')">Module 1</button>
                            <button onclick="getPDF('2')">Module 2</button>
                            <button onclick="getPDF('3')">Module 3</button>
                            <button onclick="getPDF('4')">Module 4</button>
                            <button onclick="getPDF('5')">Module 5</button>
                            
                        </div>

                        <div id="yearsContainer" style="display: none;">
                            <h3>Years</h3>
                            
                            <button onclick="getPDF('2021')">2021</button>
                            <button onclick="getPDF('2022')">2022</button>
                            
                        </div>
                        <div id="modulesContainer" style="display: none;">
                        <h3>Modules</h3>
                        <div id="moduleButtons"></div>
                        </div>

                        <div id="yearsContainer" style="display: none;">
                        <h3>Years</h3>
                        <div id="yearButtons"></div>
                        </div>

                        <div id="syllabusContainer" style="display: none;">
                        <h3>Syllabus</h3>
                        <div id="syllabusButtons"></div>
                        </div>
                         
                        <div id="impContainer" style="display: none;">
                        <h3>IMP Questions</h3>
                        <div id="impButtons"></div>
                        </div>

                        <div id="labContainer" style="display: none;">
                        <h3>Lab Manual</h3>
                        <div id="labButtons"></div>
                        </div>

<div id="feedbackOverlay" style="display: none; position: fixed; top: -10px; left: 0; width: 100%; height: 100%; 
    background-color: rgba(0, 0, 0, 0.8); z-index: 1000; text-align: center; padding: 20px  20px;">
    
    <div id="feedbackForm" style="background-color: white; padding: 30px; display: inline-block; border-radius: 10px; position: relative;">
        
        <!-- ✖ Close Button -->
        <button onclick="document.getElementById('feedbackOverlay').style.display='none'" 
            style="position: absolute; top: 10px; right: 10px; background: none; border: none; 
            font-size: 24px; color: black; cursor: pointer;">&times;</button>

        <h2 style="color: black;">We value your Feedback!</h2>

        <!-- ✅ Add ID Here -->
        <textarea id="feedbackMessage" placeholder="Write your feedback here..." rows="6" cols="60" 
            style="margin-top: 10px; padding: 10px;"></textarea><br><br>

        <button onclick="submitFeedback()" 
            style="padding: 10px 20px; background-color: green; color: white; 
            border: none; border-radius: 5px; cursor: pointer;">
            Submit Feedback
        </button>
    </div>
</div>





    
            `;
    
            // Append new content container to the DOM
            container1.parentElement.appendChild(newContentContainer);
    
            joinButton.addEventListener("click", function () {
                // Hide the old content
                container1.style.display = "none";
    
                // Show the new content
                newContentContainer.style.display = "block";
            });
        });

		const data = {
  "2021": {
    "CSE": {
      "P Cycle": [
        "Engineering Mathematics - I",
        "Engineering Physics ",
        "Basic Electrical Engineering",
        "Programming in C",
        "Engineering Mechanics",
        "Technical English - I",
        "C Programming Lab",
        "Innovation & Design Thinking",
        "Kannada / Constitution of India & Professional Ethics"
      ],
      "C Cycle": [
        "Engineering Mathematics - II",
        "Engineering Chemistry",
        "Basic Electronics",
        "Data Structures using C",
        "Engineering Graphics / Workshop",
        "Technical English - II",
        "Physics / Chemistry Lab",
        "Data Structures Lab",
        "Engineering Graphics / Workshop Lab",
        "Environmental Studies"
      ],
      "3": [
        "Mathematics for Computer Science",
        "Data Structures and Applications",
        "Digital Logic and Computer Design",
        "Object-Oriented Programming using Java",
        "Computer Organization and Architecture",
        "Discrete Mathematics"
      ],
      "4": [
        "Design and Analysis of Algorithms",
        "Operating Systems",
        "Database Management Systems",
        "Software Engineering",
        "Microcontroller and Embedded Systems",
        "Professional Elective - I"
      ],
      "5": [
        "Computer Networks",
        "Theory of Computation",
        "Software Testing",
        "Artificial Intelligence",
        "Professional Elective - II",
        "Open Elective - I"
      ],
      "6": [
        "Machine Learning",
        "Cryptography and Network Security",
        "Internet of Things (IoT)",
        "Professional Elective - III",
        "Open Elective - II"
      ],
      "7": [
        "Big Data Analytics",
        "Mobile Application Development",
        "Professional Elective - IV"
      ],
      "8": [
        "Project Work Phase – II",
        "Internship",
        "Technical Seminar"
      ]
    },
    "ISE": {
      "P Cycle": [
        "Engineering Mathematics - I",
        "Engineering Physics ",
        "Basic Electrical Engineering",
        "Programming in C",
        "Engineering Mechanics",
        "Technical English - I",
        "C Programming Lab",
        "Innovation & Design Thinking",
        "Kannada / Constitution of India & Professional Ethics"
      ],
      "C Cycle": [
        "Engineering Mathematics - II",
        "Engineering Chemistry",
        "Basic Electronics",
        "Data Structures using C",
        "Engineering Graphics / Workshop",
        "Technical English - II",
        "Physics / Chemistry Lab",
        "Data Structures Lab",
        "Engineering Graphics / Workshop Lab",
        "Environmental Studies"
      ],
      "3": [
        "Mathematics for Information Science",
        "Data Structures and Applications",
        "Object-Oriented Programming using Java",
        "Digital Logic and Computer Design",
        "Computer Organization",
        "Discrete Mathematics"
      ],
      "4": [
        "Design and Analysis of Algorithms",
        "Operating Systems",
        "Database Management Systems",
        "Software Engineering",
        "Microcontrollers and Embedded Systems",
        "Professional Elective – I"
      ],
      "5": [
        "Computer Networks",
        "Theory of Computation",
        "Software Testing",
        "Artificial Intelligence",
        "Professional Elective – II",
        "Open Elective – I"
      ],
      "6": [
        "Machine Learning",
        "Cryptography and Network Security",
        "Internet of Things (IoT)",
        "Professional Elective – III",
        "Open Elective – II"
      ],
      "7": [
        "Big Data Analytics",
        "Mobile Application Development",
        "Professional Elective – IV"
      ],
      "8": [
        "Project Work Phase – II",
        "Internship",
        "Technical Seminar"
      ]
    },
    "ME": {
      "P Cycle": [
        "Engineering Mathematics - I",
        "Engineering Physics ",
        "Basic Electrical Engineering",
        "Programming in C",
        "Engineering Mechanics",
        "Technical English - I",
        "C Programming Lab",
        "Innovation & Design Thinking",
        "Kannada / Constitution of India & Professional Ethics"
      ],
      "C Cycle": [
        "Engineering Mathematics - II",
        "Engineering Chemistry",
        "Basic Electronics",
        "Elements of Mechanical Engineering",
        "Engineering Graphics / Workshop",
        "Technical English - II",
        "Physics / Chemistry Lab",
        "Engineering Graphics / Workshop Lab",
        "Environmental Studies"
      ],
      "3": [
        "Engineering Mathematics – III",
        "Material Science and Metallurgy",
        "Mechanics of Materials",
        "Thermodynamics",
        "Machine Drawing"
      ],
      "4": [
        "Engineering Mathematics – IV",
        "Kinematics of Machines",
        "Fluid Mechanics",
        "Manufacturing Technology",
        "Engineering Statistics and Numerical Methods"
      ],
      "5": [
        "Design of Machine Elements – I",
        "Dynamics of Machinery",
        "Mechanical Measurements and Metrology",
        "Energy Engineering",
        "Professional Elective – I"
      ],
      "6": [
        "Design of Machine Elements – II",
        "Heat Transfer",
        "Control Engineering",
        "Finite Element Methods",
        "Professional Elective – II",
        "Open Elective – I"
      ],
      "7": [
        "Computer Integrated Manufacturing",
        "Refrigeration and Air Conditioning",
        "Professional Elective – III",
        "Open Elective – II"
      ],
      "8": [
        "Project Work Phase – II",
        "Internship",
        "Technical Seminar"
      ]
    },
    "CIVIL": {
      "P Cycle": [
        "Engineering Mathematics - I",
        "Engineering Physics ",
        "Basic Electrical Engineering",
        "Programming in C",
        "Engineering Mechanics",
        "Technical English - I",
        "C Programming Lab",
        "Innovation & Design Thinking",
        "Kannada / Constitution of India & Professional Ethics"
      ],
      "C Cycle": [
        "Engineering Mathematics - II",
        "Engineering Chemistry",
        "Basic Electronics",
        "Elements of Civil Engineering",
        "Engineering Graphics / Workshop",
        "Technical English - II",
        "Physics / Chemistry Lab",
        "Engineering Graphics / Workshop Lab",
        "Environmental Studies"
      ],
      "3": [
        "Engineering Mathematics – III",
        "Strength of Materials",
        "Surveying and Geomatics",
        "Fluid Mechanics",
        "Building Materials and Construction"
      ],
      "4": [
        "Engineering Mathematics – IV",
        "Structural Analysis",
        "Applied Hydraulics",
        "Engineering Geology",
        "Building Planning and Drawing"
      ],
      "5": [
        "Design of RC Structural Elements",
        "Geotechnical Engineering",
        "Environmental Engineering",
        "Transportation Engineering – I",
        "Construction Management & Entrepreneurship"
      ],
      "6": [
        "Design of Steel Structural Elements",
        "Hydrology and Irrigation Engineering",
        "Transportation Engineering – II",
        "Open Elective – I",
        "Professional Elective – I"
      ],
      "7": [
        "Quantity Surveying and Valuation",
        "Matrix Method of Structural Analysis",
        "Professional Elective – II",
        "Open Elective – II"
      ],
      "8": [
        "Project Work Phase – II",
        "Internship",
        "Technical Seminar"
      ]
    },
    "ECE": {
      "P Cycle": [
        "Engineering Mathematics - I",
        "Engineering Physics ",
        "Basic Electrical Engineering",
        "Programming in C",
        "Engineering Mechanics",
        "Technical English - I",
        "C Programming Lab",
        "Innovation & Design Thinking",
        "Kannada / Constitution of India & Professional Ethics"
      ],
      "C Cycle": [
        "Engineering Mathematics - II",
        "Engineering Chemistry",
        "Basic Electronics",
        "Data Structures using C",
        "Engineering Graphics / Workshop",
        "Technical English - II",
        "Data Structures Lab",
        "Environmental Studies"
      ],
      "3": [
        "Mathematics for Electronics",
        "Analog Electronic Circuits",
        "Logic Design",
        "Signals and Systems",
        "Data Structures using C++"
      ],
      "4": [
        "Engineering Statistics and Linear Algebra",
        "Control Systems",
        "Microcontrollers and ARM Architecture",
        "Digital Signal Processing",
        "Principles of Communication"
      ],
      "5": [
        "Computer Communication Networks",
        "Digital System Design using Verilog",
        "Antennas and Propagation",
        "Linear Integrated Circuits",
        "Professional Elective – I"
      ],
      "6": [
        "Embedded Systems",
        "VLSI Design",
        "Wireless Communication",
        "Professional Elective – II",
        "Open Elective – I"
      ],
      "7": [
        "Artificial Intelligence & Machine Learning",
        "Optical Communication / Satellite Communication",
        "Professional Elective – III",
        "Open Elective – II"
      ],
      "8": [
        "Project Work Phase – II",
        "Internship",
        "Technical Seminar"
      ]
    },
    "EEE": {
      "P Cycle": [
        "Engineering Mathematics - I",
        "Engineering Physics ",
        "Basic Electrical Engineering",
        "Programming in C",
        "Engineering Mechanics",
        "Technical English - I",
        "C Programming Lab",
        "Innovation & Design Thinking",
        "Kannada / Constitution of India & Professional Ethics"
      ],
      "C Cycle": [
        "Engineering Mathematics - II",
        "Engineering Chemistry",
        "Basic Electronics",
        "Data Structures using C",
        "Engineering Graphics / Workshop",
        "Technical English - II",
        "Data Structures Lab",
        "Environmental Studies"
      ],
      "3": [
        "Engineering Mathematics – III",
        "Electric Circuit Analysis",
        "Analog Electronic Circuits",
        "Digital Logic Design",
        "Electrical and Electronic Measurements",
        "Data Structures and C++"
      ],
      "4": [
        "Engineering Mathematics – IV",
        "Microcontroller and Embedded Systems",
        "Power Generation and Transmission",
        "Control Systems",
        "Signals and Systems"
      ],
      "5": [
        "Electrical Machines",
        "Linear Integrated Circuits",
        "Power Electronics",
        "Renewable Energy Sources",
        "Professional Elective – I"
      ],
      "6": [
        "Power System Analysis",
        "Electric Drives and Control",
        "Digital Signal Processing",
        "Open Elective – I",
        "Professional Elective – II"
      ],
      "7": [
        "Switchgear and Protection",
        "Industrial Automation",
        "Professional Elective – III",
        "Open Elective – II"
      ],
      "8": [
        "Project Work Phase – II",
        "Internship",
        "Technical Seminar"
      ]
    }
  },
  "2022": {
    "CSE": {
      "P Cycle": ["Basic Electronics", "Engineering Mathematics"],
      "C Cycle": ["Physics", "Chemistry"],
      "3": ["Machine Learning", "Database Systems"],
      "4": ["Computer Networks", "Software Engineering"]
    },
    "ISE": {
      "P Cycle": ["M1", "Basic Electronics", "Physics", "POP", "English", "Kannada", "IOT", "IDT"],
      "C Cycle": ["M2", "Chemistry", "Python", "CAED", "English", "IC", "Civil"],
      "3": ["M3", "DSA", "Java", "OS", "DDCO"],
      "4": ["Advanced Java", "Graph Theory", "DBMS", "ADA", "Biology"]
    },
    "ECE": {
      "P Cycle": ["Basic Electronics", "Engineering Mathematics"],
      "C Cycle": ["Physics", "Chemistry"],
      "3": ["Embedded Systems", "VLSI Design"],
      "4": ["Wireless Communication", "Antenna Theory"]
    }
  }
};
                    

                    function resetFields(ids) {
                        ids.forEach(id => {
                            document.getElementById(id).innerHTML = '<option value="">Select</option>';
                            document.getElementById(id).disabled = true;
                        });
                    }

                    function updateDepartments() {
                        let scheme = document.getElementById("scheme").value;
                        let deptSelect = document.getElementById("Department");
                        resetFields(["Department", "semester", "subject", "category"]);
                        if (scheme) {
                            deptSelect.disabled = false;
                            ["CSE", "ISE", "AIML", "ECE", "EEE", "CIVIL", "MECH"].forEach(dept => {
                                deptSelect.innerHTML += `<option value="${dept}">${dept}</option>`;
                            });
                        }
                    }

                    function updateSemesters() {
                        let dept = document.getElementById("Department").value;
                        let semSelect = document.getElementById("semester");
                        resetFields(["semester", "subject", "category"]);
                        if (dept) {
                            semSelect.disabled = false;
                            ["P Cycle", "C Cycle", "3", "4", "5", "6", "7", "8"].forEach(sem => {
                                semSelect.innerHTML += `<option value="${sem}">${sem}</option>`;
                            });
                        }
                    }

                    function updateSubjects() {
                        let scheme = document.getElementById("scheme").value;
                        let dept = document.getElementById("Department").value;
                        let sem = document.getElementById("semester").value;
                        let subSelect = document.getElementById("subject");
                        resetFields(["subject", "category"]);
                        if (scheme && dept && sem && data[scheme]?.[dept]?.[sem]) {
                            subSelect.disabled = false;
                            data[scheme][dept][sem].forEach(sub => {
                                subSelect.innerHTML += `<option value="${sub}">${sub}</option>`;
                            });
                        }
                    }

                    function updateCategories() {
                        let categorySelect = document.getElementById("category");
                        resetFields(["category"]);
                        categorySelect.disabled = false;
                        ["Notes", "PYQ's", "Model Papers", "Supplementary","Syllabus","IMP Questions","Lab Manual"].forEach(cat => {
                            categorySelect.innerHTML += `<option value="${cat}">${cat}</option>`;
                        });
                    }

                    function search() {
    const scheme = document.getElementById("scheme").value;
    const dept = document.getElementById("Department").value;
    const sem = document.getElementById("semester").value;
    const sub = document.getElementById("subject").value;
    const category = document.getElementById("category").value;

    fetch(`fetch.php?scheme=${scheme}&department=${dept}&semester=${sem}&subject=${sub}&category=${category}`)
        .then(res => res.json())
        .then(data => {
            const modulesDiv = document.getElementById("modulesContainer");
            const yearsDiv = document.getElementById("yearsContainer");
            const syllabusDiv = document.getElementById("syllabusContainer");
            const impDiv = document.getElementById("impContainer");
            const labDiv = document.getElementById("labContainer");

            // Clear existing content in modulesContainer and yearsContainer
            modulesDiv.innerHTML = "";
            yearsDiv.innerHTML = "";
            syllabusDiv.innerHTML = "";
            impDiv.innerHTML = "";
            labDiv.innerHTML = "";

            if (data.length > 0) {
                const subjectFullName = data[0].subject_full_name; // Get subject_full_name from the first record
                const subjectCode = data[0].subject_code; // Get subject_code from the first record

                if (category === "Notes") {
                    modulesDiv.style.display = "block";
                    yearsDiv.style.display = "none";
                    syllabusDiv.style.display = "none";
                    impDiv.style.display = "none";
                    labDiv.style.display = "none";

                    // Create a single heading with both subject_full_name and subject_code
                    const subjectHeading = document.createElement("h3");
                    subjectHeading.innerText = `${subjectFullName} (${subjectCode})`; // Combine subject_full_name and subject_code
                    modulesDiv.appendChild(subjectHeading);

                    // Add dynamic buttons for modules
                    const uniqueModules = new Set(); // Use a Set to avoid duplicate modules
                    data.forEach(item => {
                        if (!uniqueModules.has(item.module_or_year)) {
                            uniqueModules.add(item.module_or_year);
                            const btn = document.createElement("button");
                            btn.innerText = "Module " + item.module_or_year;
                            btn.onclick = () => window.open(item.pdf_path, '_blank');
                            modulesDiv.appendChild(btn);
                        }
                    });
                } /* The code snippet you provided is written in PHP. It seems to be a part of a larger
                code block where the condition `category === "PYQ's"` is being checked. If this
                condition is true, then the code block enclosed in the `else if` statement will be
                executed. */
                else if (category === "PYQ's" || category === "Supplementary" || category === "Model Papers") {
    modulesDiv.style.display = "none";
    yearsDiv.style.display = "block";
    syllabusDiv.style.display = "none";
    impDiv.style.display = "none";
    labDiv.style.display = "none";

    // Create a single heading with both subject_full_name and subject_code
    const subjectHeading = document.createElement("h3");
    subjectHeading.innerText = `${subjectFullName} (${subjectCode})`; // Combine subject_full_name and subject_code
    yearsDiv.appendChild(subjectHeading);

    const uniqueYears = new Set(); // Use a Set to avoid duplicate years
    data.forEach(item => {
        if (!uniqueYears.has(item.module_or_year)) {
            uniqueYears.add(item.module_or_year);
            const btn = document.createElement("button");
            btn.innerText = item.module_or_year;
            btn.onclick = () => window.open(item.pdf_path, '_blank');
            yearsDiv.appendChild(btn);
        }
    });
}
else if (category === "Syllabus") {
                    modulesDiv.style.display = "none";
                    yearsDiv.style.display = "none";
                    syllabusDiv.style.display = "block";
                    impDiv.style.display = "none";
                    labDiv.style.display = "none";

                    // Create a single heading with both subject_full_name and subject_code
                    const subjectHeading = document.createElement("h3");
                    subjectHeading.innerText = `${subjectFullName} (${subjectCode})`; // Combine subject_full_name and subject_code
                    syllabusDiv.appendChild(subjectHeading);

                    // Add dynamic buttons for modules
                    const uniqueModules = new Set(); // Use a Set to avoid duplicate modules
                    data.forEach(item => {
                        if (!uniqueModules.has(item.module_or_year)) {
                            uniqueModules.add(item.module_or_year);
                            const btn = document.createElement("button");
                            btn.innerText = "Syllabus ";
                            btn.onclick = () => window.open(item.pdf_path, '_blank');
                           syllabusDiv.appendChild(btn);
                        }
                    });
                }
             else if (category === "IMP Questions") {
                    modulesDiv.style.display = "none";
                    yearsDiv.style.display = "none";
                    syllabusDiv.style.display = "none";
                    impDiv.style.display = "block";
                    labDiv.style.display = "none";

                    // Create a single heading with both subject_full_name and subject_code
                    const subjectHeading = document.createElement("h3");
                    subjectHeading.innerText = `${subjectFullName} (${subjectCode})`; // Combine subject_full_name and subject_code
                    impDiv.appendChild(subjectHeading);

                    // Add dynamic buttons for modules
                    const uniqueModules = new Set(); // Use a Set to avoid duplicate modules
                    data.forEach(item => {
                        if (!uniqueModules.has(item.module_or_year)) {
                            uniqueModules.add(item.module_or_year);
                            const btn = document.createElement("button");
                            btn.innerText = "IMP Questions";
                            btn.onclick = () => window.open(item.pdf_path, '_blank');
                            impDiv.appendChild(btn);
                        }
                    });
                }
                else if (category === "Lab Manual") {
                    modulesDiv.style.display = "none";
                    yearsDiv.style.display = "none";
                    syllabusDiv.style.display = "none";
                    impDiv.style.display = "none";
                    labDiv.style.display = "block";

                    // Create a single heading with both subject_full_name and subject_code
                    const subjectHeading = document.createElement("h3");
                    subjectHeading.innerText = `${subjectFullName} (${subjectCode})`; // Combine subject_full_name and subject_code
                    labDiv.appendChild(subjectHeading);

                    // Add dynamic buttons for modules
                    const uniqueModules = new Set(); // Use a Set to avoid duplicate modules
                    data.forEach(item => {
                        if (!uniqueModules.has(item.module_or_year)) {
                            uniqueModules.add(item.module_or_year);
                            const btn = document.createElement("button");
                            btn.innerText = "Lab Manual";
                            btn.onclick = () => window.open(item.pdf_path, '_blank');
                            labDiv.appendChild(btn);
                        }
                    });
                }
            } else {
                alert("No data found!");
            }
        })
        .catch(error => {
            console.error("Error fetching data:", error);
            alert("An error occurred while fetching data. Please try again.");
        });
}



                    function getPDF(filterValue) {
                        const scheme = document.getElementById("scheme").value;
                        const dept = document.getElementById("Department").value;
                        const sem = document.getElementById("semester").value;
                        const sub = document.getElementById("subject").value;
                        const category = document.getElementById("category").value;

                        fetch(`fetch_resources.php?scheme=${scheme}&department=${dept}&semester=${sem}&subject=${sub}&category=${category}&filter=${filterValue}`)
                            .then(res => res.text())
                            .then(path => {
                                if (path === "not_found") {
                                    alert("No PDF found!");
                                } else {
                                    window.open(path, "_blank");
                                }
                            });
                    }
    </script>


    <script>
        document.addEventListener("keydown", function (e) {
    if (e.key === "F12") {
        e.preventDefault(); // Prevent the default action of the F12 key
        
    }
    else if ((e.ctrlKey && e.shiftKey && e.key === "I") || (e.metaKey && e.altKey && e.key === "I")) {
        e.preventDefault();
    }
});
        // Disable right-click and display a custom message at the cursor's position
        document.addEventListener("contextmenu", function (e) {
            e.preventDefault(); // Prevent the default right-click menu

            // Remove any existing message
            const existingMessage = document.getElementById("custom-message");
            if (existingMessage) {
                existingMessage.remove();
            }

            // Create a new message element
            const message = document.createElement("div");
            message.id = "custom-message";
            message.innerText = "Right-click is disabled!!!";
            message.style.position = "absolute";
            message.style.top = `${e.clientY}px`; // Set the Y position to the cursor's position
            message.style.left = `${e.clientX}px`; // Set the X position to the cursor's position
            message.style.backgroundColor = "#333";
            message.style.color = "#fff";
            message.style.padding = "10px";
            message.style.borderRadius = "5px";
            message.style.boxShadow = "0 4px 8px rgba(0, 0, 0, 0.2)";
            message.style.zIndex = "1000";
            message.style.fontSize = "14px";

            // Add the message to the body
            document.body.appendChild(message);

            // Remove the message after 2 seconds
            setTimeout(() => {
                message.remove();
            }, 2000);
        });
    </script>


    <script>
document.addEventListener("DOMContentLoaded", function () {
    const aboutUsLink = document.getElementById("aboutUsLink");
    const joinButton = document.getElementById("joinButton");
    const container1 = document.querySelector(".container1");
    let newContentContainer = document.querySelector(".new-content");

    // Create the new content container if it doesn't exist
    if (!newContentContainer) {
        newContentContainer = document.createElement("div");
        newContentContainer.classList.add("new-content");
        newContentContainer.style.display = "none"; // Initially hidden
        newContentContainer.innerHTML = `
            <div class="main">
                <h2 style="margin-left:37.7%; margin-bottom: 20px; margin-top: 30px; font-family: Arial, Helvetica, sans-serif;">STUDY MATERIALS</h2>
                <!-- Add your table and other content here -->
            </div>
        `;
        container1.parentElement.appendChild(newContentContainer);
    }

    // Handle "Get In" button click
    joinButton.addEventListener("click", function () {
        container1.style.display = "none"; // Hide the old content
        newContentContainer.style.display = "block"; // Show the new content
    });

    // Handle "About Us" button click
    aboutUsLink.addEventListener("click", function (e) {
        e.preventDefault();
        newContentContainer.style.display = "none"; // Hide the new content
        container1.style.display = "block"; // Show the container1
        container1.innerHTML = `
            <section class="about-us-section">
                <div class="about-description">
                    <h1 style="color: #FFA500; margin-bottom: 15px;,margin-top:0px; text-align: center;"><u>Team Name</u>: V.I.P</h1>
                </div>
                <div class="member-photos">
                    <div class="member top">
                        <img src="images/sanjana.png" alt="Member 1">
                    </div>
                    <div class="member bottom">
                        <img src="images/shubha.png" alt="Member 2">
                    </div>
                    <div class="member bottom">
                        <img src="images/tej.png" alt="Member 3">
                    </div>
                    <div class="member bottom">
                        <img src="images/mariya.png" alt="Member 4">
                    </div>
                    <div class="member bottom">
                        <img src="images/yogi.png" alt="Member 5">
                    </div>
                </div>
                <div class="about-description">
                    <br>
                    <h2 style="color: #FFA500;  text-align: center;"><u>Team Leader:</u> <span style="font-size: large;">SANJANA</span></h2>
                    <br>
                    <p style="font-size: large;">Greetings, everyone. We are <strong><u>Sanjana</u></strong>, <strong><u>Shubha</u></strong>, <strong><u>Sheeba</u></strong>, <strong><u>Tejas</u></strong>, and <strong><u>Yogesh</u></strong>, and we are <strong>Second-year Information Science and Engineering (ISE) students.</strong>
                    Today, we are excited to share the <strong>inspiration behind a project we’ve developed</strong>: a website dedicated to providing high-quality study materials for VTU students. As VTU students ourselves, we have often struggled to find well-organized and reliable resources. This platform is built to offer a valuable resource for others facing similar challenges.</p>
                
                    <h2 style="color: #FFA500; margin-bottom: 5px; text-align: center;">Contact Us</h2>
                
                <span style="text-align:center;">    
                <p><strong><u>Email:</u></strong> vtulibrary@gmail.com</p>
                <p><strong><u>Instagram:</u>V.I.P_5</p>
                <p><strong><u>Phone:</u></strong> +91 9876543210</p>
                <p><strong><u>Location:</u></strong> J.I.T,Davanager, Karnataka</p>
                
                </span>    
                </div>
            </section>
        `;
    });
});
</script>


<script>
    function showFeedback() {
        document.getElementById('feedbackOverlay').style.display = 'block';
    }

    function submitFeedback() {
        alert("Thank you for your feedback!");
        document.getElementById('feedbackOverlay').style.display = 'none';
    }
</script>

<!--<script>
    function showFeedback() {
        document.getElementById('feedbackOverlay').style.display = 'block';
    }

    function submitFeedback() {
        const message = document.getElementById('feedbackMessage').value.trim();

        if (message === "") {
            alert("Please enter your feedback before submitting.");
            return;
        }

        // Send feedback via AJAX to PHP
        const xhr = new XMLHttpRequest();
        xhr.open("POST", "submit_feedback.php", true);
        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

        xhr.onload = function () {
            if (xhr.status === 200) {
                if (xhr.responseText === "success") {
                    alert("Thank you! Your feedback has been submitted.");
                    document.getElementById('feedbackOverlay').style.display = 'none';
                    document.getElementById('feedbackMessage').value = '';
                } else {
                    alert("Something went wrong. Please try again.");
                }
            }
        };

        xhr.send("message=" + encodeURIComponent(message));
    }
</script>-->
<script>
  window.addEventListener('DOMContentLoaded', () => {
    const container = document.querySelector('.news-scroll-container');
    const ul = container.querySelector('ul');

    const wrapper = document.createElement('div');
    wrapper.classList.add('scroll-wrapper');

    const clone = ul.cloneNode(true);

    wrapper.appendChild(ul);
    wrapper.appendChild(clone);

    container.innerHTML = '';
    container.appendChild(wrapper);
  });
</script>



</body>
</html>

    