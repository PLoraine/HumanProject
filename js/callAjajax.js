class Ajax {
    constructor(method, url, timeout) {
        this.method = method;
        this.url = url;
        this.timeout = timeout;
    }

    get(methodP,urlP,timeoutP) {
        this.method = methodP
        this.url= urlP
        this.timeout= timeoutP

        $.ajax({
            method: methodP,
            url: urlP,
            timeout: timeoutP,
            success: function stats(data) {
                console.log('success callAjajax.js', data);
                onResponsSuccess(data);
            },
            error: function (data, error) {
                console.log('Data %s : , Erreur : %s', JSON.stringify(data), error)
            }
        })

    postMessage(methodP, urlP,timeoutP)
        this.method = methodP
        this.url= urlP
        this.timeout= timeoutP

        resul
    }


}