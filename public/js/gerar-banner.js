function downloadBanner(idDiagnostico) {

    email = $(`#email`).val()
    position = $(`#position`).val()
    tec1 = $(`#id-tec-1`).val()
    tec2 = $(`#id-tec-2`).val()
    tec3 = $(`#id-tec-3`).val()
    tec4 = $(`#id-tec-4`).val()
    console.log(
        email,
        position,
        tec1,
        tec2,
        tec3,
        tec4,        
    )
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
        success: function(data, status) {

            console.log(data)
            if (status === "success") {
                
            }

        }
      });
}