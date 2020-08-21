<html>
<head>
    <title>Google Authentication</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
 <center>
     <button type="button" id="googlebtn" onclick="GoogleLogin();"></button>
 </center>
<script src="https://www.gstatic.com/firebasejs/6.0.1/firebase.js"></script>
<script>
    // Your web app's Firebase configuration
    var firebaseConfig = {
    apiKey: "AIzaSyCwl-W84WwKi1mV_6bpHxY_eSkSMDB3m2E",
    authDomain: "glog-285014.firebaseapp.com",
    databaseURL: "https://glog-285014.firebaseio.com",
    projectId: "glog-285014",
    storageBucket: "glog-285014.appspot.com",
    messagingSenderId: "407948994431",
    appId: "1:407948994431:web:d7832fd0cab928d2b9dc4a"
    };
    // Initialize Firebase
    firebase.initializeApp(firebaseConfig);
</script>
<script>

    //first of all create google provider object

    var provider=new firebase.auth.GoogleAuthProvider();
    //Login with popup window
    firebase.auth().signInWithPopup(provider).then(function () {
        //code executes after successful login

        window.location="home.php";
    }).catch(function (error) {
        var errorMessage=error.message;
        alert(errorMessage);
    });
</script>
<!-- <script src="js/google.js" type="text/javascript"></script> -->

</body>
</html>

