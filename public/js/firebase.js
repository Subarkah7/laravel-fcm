// For Firebase JS SDK v7.20.0 and later, measurementId is optional
const firebaseConfig = {
    apiKey: "AIzaSyDcULxTrAxytDWOMaBQyBORUDu_dNfnYso",
    authDomain: "fcm-baledono.firebaseapp.com",
    databaseURL: "https://fcm-baledono.firebaseio.com",
    projectId: "fcm-baledono",
    storageBucket: "fcm-baledono.appspot.com",
    messagingSenderId: "804173260946",
    appId: "1:804173260946:web:c65ba3b35814f40908de4b",
    measurementId: "G-BWZ8XE26F9"
  };


firebase.initializeApp(firebaseConfig);

    const messaging = firebase.messaging();
            messaging
                .requestPermission()
                .then(function () {
                    console.log("Notification permission granted");
                    return messaging.getToken();

                }).then(function(token) {
                    $('#device_token').val(token)
                    console.log(token) 
                }).

                catch(function(err) {
                    console.log("Unable to get permission to notify.", err);
                
                
});

// ------------------------------------------

messaging.onMessage((payLoad) => {
    console.log(payLoad);
})