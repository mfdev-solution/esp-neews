<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/v2/style.css">
    <title>Site d'actualite</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="htmlcss bootstrap menu, fixed, after scrolling page, navbar, menu CSS examples" />
    <meta name="description" content="Bootstrap 5 fixed navbar on scroll page examples, Bootstrap 5" />


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>

    <script type="text/javascript">
        document.addEventListener("DOMContentLoaded", function() {

            window.addEventListener('scroll', function() {

                if (window.scrollY > 50) {
                    document.getElementById('navbar_top').classList.add('fixed-top');
                    // add padding top to show content behind navbar
                    navbar_height = document.querySelector('.navbar').offsetHeight;
                    document.body.style.paddingTop = navbar_height + 'px';
                } else {
                    document.getElementById('navbar_top').classList.remove('fixed-top');
                    // remove padding top from body
                    document.body.style.paddingTop = '0';
                }
            });
        });
        // DOMContentLoaded  end
    </script>
</head>