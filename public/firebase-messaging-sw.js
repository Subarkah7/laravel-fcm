importScripts('https://www.gstatic.com/firebasejs/3.5.0/firebase-app.js');
importScripts('https://www.gstatic.com/firebasejs/3.5.0/firebase-messaging.js');


const firebaseConfig = {
    apiKey: "AIzaSyDcULxTrAxytDWOMaBQyBORUDu_dNfnYso",
    authDomain: "fcm-baledono.firebaseapp.com",
    databaseURL: "https://fcm-baledono.firebaseio.com",
    projectId: "fcm-baledono",
    storageBucket: "fcm-baledono.appspot.com",
    messagingSenderId: "804173260946",
    appId: "1:804173260946:web:c65ba3b35814f40908de4b",
    measurementId: "G-BWZ8XE26F9"
}

firebase.initializeApp(firebaseConfig);

var messaging = firebase.messaging();

messaging.setBackgroundMessageHandler(function(payLoad) {
    console.log('[firebase-messaging-sw.js] Received background message ', payload);

    var notificationTitle = 'Background Message Title';
    var notificationOptions = {
        body: 'Background Message Body.',
        icon: '/firebase-logo.png'
    };

    return self.registration.showNotification(notificationTitle, notificationOptions);
});