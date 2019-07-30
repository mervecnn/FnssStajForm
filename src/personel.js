(() => {
    const adElement = document.getElementById('ad');
    adElement.onchange(_ => {
        console.log('setting name to: ' + adElement.innerText);
        Cookies.set('ad', adElement.innerText);
    });
    let oldText = Cookies.get('ad');
    console.log('oldText: ' + oldText);
    adElement.innerText = oldText;
})()