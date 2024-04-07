var header = document.getElementById('header');
        var navHeader = document.getElementById('header__nav');
        var main = document.getElementById('main');
        var showSidebar = false;

        function toogleSidebar() {
            showSidebar = !showSidebar;
            if (showSidebar) {
                navHeader.style.marginLeft = '-10vw';
                navHeader.style.animationName = 'showSidebar';
                main.style.filter = 'blur(2px)';
            }
            else {
                navHeader.style.marginLeft = '-100vh';
                navHeader.style.animationName = '';
                main.style.filter = '';
            }
        }

        function closeSidebar() {
            if (showSidebar) {
                toogleSidebar();
            }
        }

        window.addEventListener('resize', function (event) {
            if (window.innerWidth > 768 && showSidebar) {
                toogleSidebar();
            }
        });

        // Get the button
        let mybutton = document.getElementById("myBtn");

        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function () { scrollFunction() };

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                mybutton.style.display = "block";
            } else {
                mybutton.style.display = "none";
            }
        }

        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }