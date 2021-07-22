$(document).ready( function() 
{
    const url = "http://localhost:8080";

    $(".addKecamatanForm").on("submit", e => {
        e.preventDefault();
    });
    
    $(".addKecamatan").on("click", () => {
        const data = new FormData($("form")[0]);
        fetch(`${url}/store/kecamatan`, {
            method : "POST",
            body : data
        })
        .then(response => response.json())
        .then(result => {
            const arr_input = ["geo_json", "nama_kecamatan", "kode", "warna"];
            arr_input.forEach( (input) => {
                const index = Object.keys(result).indexOf(input);
                if( index !== -1 )
                {
                    $(`.${input}`).remove();
                    $(`#${input}`).addClass("is-invalid");
                    $(`#${input}`).after(`<div class="alert alert-danger mt-2 ${input}">${Object.values(result)[index]}</div>`);
                }
                else
                {
                    $(`#${input}`).removeClass("is-invalid");
                    $(`.${input}`).remove();
                }
            })
        })
    })
})