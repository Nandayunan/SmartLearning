window.addEventListener("load", () => {
    const input = document.getElementById("upload");
    const filewrapper = document.getElementById("filewrapper");

    input.addEventListener("change", (e) => {
        let filename = e.target.files[0].name;
        let filetype = e.target.value.split(".").pop();
        fileShow(filename, filetype);
    });

    function fileShow(filename, filetype) {
        const showfileboxElem = document.createElement("div");
        showfileboxElem.classList.add("showfilebox");
        const leftElem = document.createElement("div");
        leftElem.classList.add("left");
        const fileTypeElem = document.createElement("span");
        fileTypeElem.classList.add("filetype");
        fileTypeElem.textContent = filetype.toUpperCase();
        leftElem.append(fileTypeElem);
        const filetitleElem = document.createElement("h3");
        filetitleElem.innerHTML=filename;
        leftElem.append(filetitleElem);
        showfileboxElem.append(leftElem);
        const rightElem = document.createElement("div");
        rightElem.classList.add("right");
        showfileboxElem.append(rightElem);
        const crossElem =document.createElement("span");
        crossElem.innerHTML="&#215";
        rightElem.append(crossElem); 
        filewrapper.append(showfileboxElem);

        crossElem.addEventListener("click",()=>{
            filewrapper.removeChild(showfileboxElem);
        })
    }
});
