<!DOCTYPE html>
<!-- Coding By CodingNepal - codingnepalweb.com -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!----======== CSS ======== -->
    <link rel="stylesheet" href="report_form.css
    ">
     
    <!----===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <title>Admin Dashboard Panel</title>
</head>
<body>
    <nav>
        <div class="logo-name">
            <div class="logo-image">
               <img src="images/logo.png" alt="">
            </div>

            <span class="logo_name">SafeNepal</span>
        </div>

        <div class="menu-items">
            <ul class="nav-links">
                <li><a href="dashboard.php">
                    <i class="uil uil-estate"></i>
                    <span class="link-name">Dashboard</span>
                </a></li>
                <li><a href="report_form.php">
                    <i class="uil uil-files-landscapes"></i>
                    <span class="link-name">Report Crime</span>
                </a></li>
                <li><a href="view_status.php">
                    <i class="uil uil-chart"></i>
                    <span class="link-name">View Status</span>
                </a></li>
                <li><a href="anonymous.php">
                    <i class="uil uil-thumbs-up"></i>
                    <span class="link-name">Anonymous Report</span>
                </a></li>
                <li><a href="contact.php">
                    <i class="uil uil-comments"></i>
                    <span class="link-name">Contact us</span>
                </a></li>
          
            </ul>
            
            <ul class="logout-mode">
                <li><a href="logout.php">
                    <i class="uil uil-signout"></i>
                    <span class="logout">Logout</span>
                </a></li>

             

                <div class="mode-toggle">
                  <span class="switch"></span>
                </div>
            </li>
            </ul>
        </div>
    </nav>
    <div class="anonymous-reporting">
    <div class="title">
        <i class="uil uil-thumbs-up"></i>
        <span class="text">Report Your Problem</span>
    </div>
    <form class="report-form">
        <label for="report-type">Type of Incident:</label>
        <select id="report-type" name="report-type">
            <option value="assault">Assault</option>
            <option value="theft">Theft</option>
            <option value="scam">Scam</option>
            <option value="vandalism">Vandalism</option>
        </select>

        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>

        <label for="phone">Phone Number:</label>
        <input type="number" id="phone" name="phone"required>

        <label for="address">Address:</label>
        <input type="text" id="address" name="address"required>

        <label for="description">Description:</label>
        <textarea id="description" name="description" rows="4"required></textarea>

        <button type="submit">Submit Report</button>
    </form>
</div>



    <script>
        const body = document.querySelector("body"),
      modeToggle = body.querySelector(".mode-toggle");
      sidebar = body.querySelector("nav");
      sidebarToggle = body.querySelector(".sidebar-toggle");



sidebarToggle.addEventListener("click", () => {
    sidebar.classList.toggle("close");
    if(sidebar.classList.contains("close")){
        localStorage.setItem("status", "close");
    }else{
        localStorage.setItem("status", "open");
    }
})

    </script>
    <footer>
        <h1>hello</h1>
    </footer>
</body>
</html>