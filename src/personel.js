(() => {
    const adElement = document.getElementById('ad');
	console.log('adElement: ' + adElement);
    adElement.onchange = (_) => {
        console.log('setting name to: ' + adElement.value);
        Cookies.set('ad', adElement.value);
    };
    let oldText = Cookies.get('ad');
    console.log('oldText: ' + oldText);
    adElement.value = oldText;
})()