// js/onesignal-init.js
// OneSignal Web SDK initialization for Task Tube

window.OneSignalDeferred = window.OneSignalDeferred || [];
OneSignalDeferred.push(async function (OneSignal) {
    await OneSignal.init({
        appId: "0ebcc71b-6c37-4aa3-acc8-eaf4a3a35720",
    });
});