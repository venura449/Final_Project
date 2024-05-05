<?php
?>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
</head>
<body>
<style>

    [data-aos] {
        opacity: 0; /* Start with opacity 0 */
        transition: opacity 0.5s ease-in-out; /* Smooth transition */
    }

    [data-aos].aos-animate {
        opacity: 1; /* When animation starts, change opacity to 1 */
    }

</style>
<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
<script>
    AOS.init();
</script>
<script>
    AOS.init({
        duration: 1000, // Animation duration (in milliseconds)
        easing: 'ease-in-out', // Easing type
        once: false // Animation happens only once
    });
</script>
</body>
</html>

