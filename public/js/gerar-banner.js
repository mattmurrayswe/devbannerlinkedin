function downloadBanner(idDiagnostico) {
    email = $(`#email`).val();
    position = $(`#position`).val();
    tec1 = $(`#tec-1`).val();
    tec2 = $(`#tec-2`).val();
    tec3 = $(`#tec-3`).val();
    tec4 = $(`#tec-4`).val();

    $.ajax({
        url: `${ENDPOINT_JS}/api/download-banner`,
        type: "POST",
        data: {
            email: email,
            position: position,
            tec_1: tec1,
            tec_2: tec2,
            tec_3: tec3,
            tec_4: tec4
        },
        xhrFields: {
            responseType: 'blob' // Set the response type to blob
        },
        success: function(data, status, xhr) {
            if (status === "success") {
                const filename = xhr.getResponseHeader('Content-Disposition').split('=')[1];
                const blob = new Blob([data], { type: 'image/png' });
                const url = window.URL.createObjectURL(blob);

                const a = document.createElement('a');
                a.style.display = 'none';
                a.href = url;
                a.download = filename;
                document.body.appendChild(a);
                a.click();

                window.URL.revokeObjectURL(url);
            }
        }
    });
}