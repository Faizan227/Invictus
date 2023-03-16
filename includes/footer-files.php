<!-- Vendor -->
<script src="vendor/plugins/js/plugins.min.js"></script>

<!-- Theme Base, Components and Settings -->
<script src="js/theme.js"></script>

<!-- Current Page Vendor and Views -->
<script src="js/views/view.contact.js"></script>

<!-- Demo -->
<script src="js/demos/demo-cleaning-services.js"></script>

<!-- Theme Custom -->
<script src="js/custom.js"></script>

<!-- Theme Initialization Files -->
<script src="js/theme.init.js"></script>
<!-- <script src="js/cookiepopup.js"></script>		 -->
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha384-tsQFqpEReu7ZLhBV2VZlAu7zcOV+rXbYlF2cqB8txI/8aZajjp4Bqd+V6D5IgvKT"></script>
<script src=js/gdpr-cookie.js></script>
<script>
$.gdprcookie.init({
title: "🍪 Cookies & Datenschutzerklärung akzeptieren",
message: "Durch die Verwendung von Cookies können wir Ihnen eine bessere Browser-Erfahrung bieten und Ihre Interaktionen mit unserer Website personalisieren. Ihre fortgesetzte Nutzung unserer Website zeigt Ihre Zustimmung zu unserer Verwendung von Cookies an.Indem Sie auf 'Cookies akzeptieren' klicken, stimmen Sie der Verwendung unserer Cookies zu.<a href=data-protection.php>Cookie-Richtlinie</a>",
delay: 600,
expires: 1,
acceptBtnLabel: "Cookies akzeptieren",
});

$(document.body)
.on("gdpr:show", function() {
    console.log("Cookie dialog is shown");
})
.on("gdpr:accept", function() {
    var preferences = $.gdprcookie.preference();
    console.log("Preferences saved:", preferences);
})
.on("gdpr:advanced", function() {
    console.log("Advanced button was pressed");
});

if ($.gdprcookie.preference("marketing") === true) {
console.log("This should run because marketing is accepted.");
}
</script>