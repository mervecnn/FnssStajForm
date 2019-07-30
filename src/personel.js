(() => {
    const adElement = document.getElementById('ad');
    adElement.onchange(_ => {
        Cookies.set('ad', adElement.innerText);
    });
    let oldText = Cookies.get('ad');
    adElement.innerText = oldText;
})()