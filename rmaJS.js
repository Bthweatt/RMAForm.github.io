// Modal trigger onSubmit
$(function () {
    $("#rma-alert").hide();
    $("form").submit(function() {
      if (this.name.value == "");
        else {
        MicroModal.init({
    onShow: modal => console.info(`${modal.id} is shown`),
    onClose: modal => console.info(`${modal.id} is hidden`),
    openTrigger: 'data-micromodal-open', 
    closeTrigger: 'data-micromodal-close',
    openClass: 'is-open', 
    disableScroll: true, 
    disableFocus: false, 
    awaitOpenAnimation: true, 
    awaitCloseAnimation: true, 
    debugMode: true
  });
      }
      return false;
    });
  });
  // Return input values
  function test(){
   let testEmail = document.getElementById('custEmail').value;
    let i =0;
    var count = document.getElementsByClassName("form-control");  
    var td = document.getElementsByClassName("td");
    for(i; i<count.length; i++){
      let count2 = document.getElementsByClassName("form-control")[i].value;
      td[i].innerText = count2;  
      if(td[i].innerText == "")
        {
        document.getElementsByClassName('form-control')[i].style.border = '1px solid red';
        document.getElementById('errorText').innerHTML = "Please fill out the highlighted fields!";
        }
        else if(!testEmail.match('@'))
        {
                window.alert("PLEASE FILLE OUT EMAIL PROPERLY!");
        }   
        else
        {
            document.getElementsByClassName('form-control')[i].style.border = '1px solid #ccc';
        }
    }  
  // Trigger jsPDF prompt
  function rmagenerate() {
          var doc = new jspdf.jsPDF()
          var img = new Image()
          var src = "https://cdn.shopify.com/s/files/1/2157/8903/files/J5_Logo_r_600x.jpg?v=1613600350";
          img.src = src;
          let rmatableoptions = {
            html: rmatable,
            startY: 110,
            margin: {top: 50},
            tableWidth: 'auto',
            theme: 'grid',
            useCss: false,
            columnStyles: {
            0: {cellWidth: 90},
            0: {fontStyle: 'bold'},  
            1: {cellWidth: 100}
            },
            styles: {
              fontSize: 14,
              lineWidth: .75,
              cellPadding: 1.9,
              valign: 'middle', 
              halign: 'left',
              cellWidth: 'auto', 
              overflow: 'linebreak',
              fontStyle: 'normal'   
          },
          }
          doc.addImage(img, "png", 75, 0, 60, 40);
          doc.setFontSize(35);
          doc.text("RMA Form Submission", 105, 55, {align: 'center'})
          doc.setFontSize(16);
          doc.text("For more information please contact us via live chat at j5create Customer Support or call us at 1-888-988-0488. Phone Support Hours are from 9:00 AM to 5:00 PM Eastern Standard Time, Monday through Friday, excluding holidays", 15, 75, {maxWidth: 190})
          //doc.autoTable(contentA)
          //doc.autoTable(contentB)
          doc.autoTable(rmatableoptions);
          doc.save('j5create_rma_submission.pdf');
  }}
