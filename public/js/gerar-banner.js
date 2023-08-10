function downloadBanner(idDiagnostico) {

    email = $(`#email`).val()
    position = $(`#position`).val()
    idTec1 = $(`#id-tec-1`).val()
    idTec2 = $(`#id-tec-2`).val()
    idTec3 = $(`#id-tec-3`).val()
    idTec4 = $(`#id-tec-4`).val()
    console.log(
        email,
        position,
        idTec1,
        idTec2,
        idTec3,
        idTec4,        
    )
    $.ajax({
        url: `${ENDPOINT_JS}/api/download-banner`,
        type: "POST",
        data: {
            email: email,
            position: position,
            id_tec_1: idTec1,
            id_tec_2: idTec2,
            id_tec_3: idTec3,
            id_tec_4: idTec4
        },
        success: function(data, status) {

            console.log(data)
            if (status === "success") {
                location.reload();
            }

        }
      });
}