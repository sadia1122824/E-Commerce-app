

const fetchNavbarFields = async () => {

    try {
        let response = await fetch('./apis/get_navbar_list_of_website.php');
        let result = await response.json();

        if (result.status === 200) {
            console.log("Data Loaded Successfully:");
            console.log(result.data);
            console.log(result.company_name);

            // Set company name
            document.getElementById("companyName").innerHTML = result.company_name;

            // Clear existing navbar
            const navbarContainer = document.getElementById("navbarContainer");
            navbarContainer.innerHTML = '';

            // Loop through each field
            result.data.forEach(item => {
                let dropdown = document.createElement("li");
                dropdown.className = "nav-item dropdown pb-lg-2 me-lg-n1 me-xl-0";

                // Create dropdown toggle
                let toggle = document.createElement("a");
                toggle.className = "nav-link dropdown-toggle";
                toggle.href = "#";
                toggle.setAttribute("role", "button");
                toggle.setAttribute("data-bs-toggle", "dropdown");
                toggle.setAttribute("data-bs-trigger", "hover");
                toggle.setAttribute("aria-expanded", "false");
                toggle.textContent = item.field_value;

                // Create dropdown menu
                let dropdownMenu = document.createElement("ul");
                dropdownMenu.className = "dropdown-menu";
                dropdownMenu.style.setProperty("--cz-dropdown-spacer", ".75rem");

                // Add subfields
                item.subfields.forEach(sub => {
                    let subLi = document.createElement("li");
                    let subLink = document.createElement("a");
                    subLink.className = "dropdown-item";
                    subLink.href = "#";
                    subLink.textContent = sub.subfield_value;

                    subLi.appendChild(subLink);
                    dropdownMenu.appendChild(subLi);
                });

                dropdown.appendChild(toggle);
                dropdown.appendChild(dropdownMenu);
                navbarContainer.appendChild(dropdown);
            });
        } else if (result.status === 204) {
            console.warn("No data found.");
        } else {
            console.error("Error:", result.message || "Something went wrong");
        }

    } catch (error) {
        console.error("Fetch error:", error);
    }
};


fetchNavbarFields(); // Call the function
