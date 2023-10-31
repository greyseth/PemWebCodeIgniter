window.OneSignalDeferred = window.OneSignalDeferred || [];
OneSignalDeferred.push(function (OneSignal) {
	OneSignal.init({
		appId: "0ab5591b-951a-4f0d-b966-3002b0668c0d",
		safari_web_id: "web.onesignal.auto.092506a7-b452-4a06-a822-c1d343884087",
		notifyButton: {
			enable: true,
		},
		subdomainName: "testing-bi",
	});
});

function sendNotif(msg) {
	OneSignal.sendSelfNotification(msg, {
		url: `${hostURL}User`,
		data: { key: "notifKey" },
	});
}
