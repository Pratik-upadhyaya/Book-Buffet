
document.getElementById("pdfButton").addEventListener("click", function(event) {
    
    event.preventDefault();
    
    
    var pdfLink = this.getAttribute("href");
    
    // Open the PDF in a new tab
    window.open(pdfLink, "_blank");
});
