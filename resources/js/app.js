import './bootstrap';

function selectItem() {
    const form=document.querySelector('.js-select-form')
    const select=document.querySelector(".js-select-component")

    if(form){
        select.addEventListener("change", (e) => {
            e.preventDefault();
            const url = form.getAttribute("action");

            let formDataValues = new FormData(form)
            
            fetch(url, {
                method: "POST",
                body: formDataValues
            })
            .then((response) => response.json())
            .then((data) => {
                if(data.data.length){
                    if(document.querySelectorAll('.js-book-item').length){
                        document.querySelectorAll('.js-book-item').forEach(e => e.remove())
                        data.data.forEach(item => {
                            document.querySelector('.js-table-body').insertAdjacentHTML('beforeend', 
                                `<tr class="js-book-item border-2 border-black">
                                    <td class="border-2 border-black p-2">${item['title']}</td>
                                    <td class="border-2 border-black p-2">${item['writers']}</td>
                                    <td class="border-2 border-black p-2">${item['count']}</td>
                                </tr>`
                            )
                        })
                    }
                }
            }).catch(error => {
                alert(error)
                console.error(error)
            });
        })
    }
}

document.addEventListener("DOMContentLoaded", function() {
    selectItem()
})