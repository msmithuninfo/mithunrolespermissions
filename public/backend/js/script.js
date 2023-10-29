// Sidebar
let closeBtn = document.querySelector("#btn");
let sidebar = document.querySelector(".sidebar");
 

closeBtn.addEventListener("click", () => {
    sidebar.classList.toggle('close');
    document.getElementById("sidebar").style.display = "block";
});

// Active Current Page in sidebar
const my_nav_link = document.querySelectorAll(".my-nav-link");
my_nav_link.forEach(navActive => {
    navActive.addEventListener('click', () => {
        document.querySelector('.active').classList.remove('active');
        navActive.classList.add('active');
    });
});
// Hiding Span Tag
let btn = document.getElementById('btn');
let spanText = document.querySelectorAll('.span-text');

btn.onclick = () => {
    for(let x of spanText) {
        x.classList.toggle('hide');
    }
};


// Sidebar Arrow Toggle
let arrow = document.querySelectorAll(".arrow");
for (var i = 0; i < arrow.length; i++) {
  arrow[i].addEventListener("click", (e)=>{
 let arrowParent = e.target.parentElement.parentElement;//selecting main parent of arrow
 arrowParent.classList.toggle("showMenu");
  });
};

// Full Screen
var elem = document.getElementById("fullScreen");
let maxFullScreen = document.getElementById("maxFullScreen");
let minFullScreen = document.getElementById("minFullScreen");
function openFullscreen() {
  if (elem.requestFullscreen) {
    elem.requestFullscreen();
  } else if (elem.webkitRequestFullscreen) { /* Safari */
    elem.webkitRequestFullscreen();
  } else if (elem.msRequestFullscreen) { /* IE11 */
    elem.msRequestFullscreen();
  }
  maxFullScreen.style.display = "none";
  minFullScreen.style.display = "block";
}
function closeFullscreen() {
    if (document.exitFullscreen) {
      document.exitFullscreen();
    } else if (document.webkitExitFullscreen) { /* Safari */
      document.webkitExitFullscreen();
    } else if (document.msExitFullscreen) { /* IE11 */
      document.msExitFullscreen();
    }
    maxFullScreen.style.display = "block";
    minFullScreen.style.display = "none";
  }
  // End Full Screen

  //Profile Dropdown 
  function profileFunction() {
    document.getElementById("profileDropdownContentID").classList.toggle("profileShow");
  }
  
  // Close the dropdown if the user clicks outside of it
  window.onclick = function(event0) {
    if (!event0.target.matches('.profileBtn')) {
      var dropdowns0 = document.getElementsByClassName("profileDropdownContentClass");
      var i;
      for (i = 0; i < dropdowns0.length; i++) {
        var openDropdown0 = dropdowns0[i];
        if (openDropdown0.classList.contains('profileShow')) {
          openDropdown0.classList.remove('profileShow');
        }
      }
    };
  };
    //End Profile Dropdown 

  //Notification Dropdown 
  function notificationFunction() {
    document.getElementById("notificationDropdownContentID").classList.toggle("notificationShow");
  }
  //End Notification Dropdown 


  //Message Dropdown 
  function messageFunction() {
    document.getElementById("messageDropdownContentID").classList.toggle("messageShow");
  }
  //End Message Dropdown 

// Check Uncheck Roles permissions
$(document).ready(function() {
	 //Select and deselect all checkboxes
	 $("#checkPermissionAll").click(function () {
			$('.chk').prop('checked', this.checked);
		});
	
	  //If one item deselect then checkbox 'checkAll' is UnCheck
	  //If all items select individually then checkbox 'checkAll' is Check
	  $(".chk").click(function () {
		  $("#checkPermissionAll").prop('checked', ($('.chk:checked').length == $('.chk').length) ? true : false);				  
	  });
});