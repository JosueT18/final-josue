/* DNI */
$("input[name='DNI']").on("input", function(){ 
    let n = destroyMask(this.value); 
    this.setAttribute("data-normalized", n);
     this.value = createMask(n);
 })
  
  /* Telefono */
  $("input[name='telefono']").on("input", function(){
    let n = destroyMask(this.value);
      this.setAttribute("data-normalized", n);
    this.value = createMask(n);
  })
  
  function createMask(string){
    return string.replace(/(\d{2})(\d{3})(\d{2})/,"$1$2$3");
  }
  
  function destroyMask(string){
    return string.replace(/\D/g,'').substring(0, 10);
  }
   /*Altura*/

  $("input[name='calleAltura']").on("input", function(){
    let n = destroyMask(this.value);
      this.setAttribute("data-normalized", n);
    this.value = createMask(n);
  })
  
  function createMask(string){
    return string.replace(/(\d{2})(\d{3})(\d{2})/,"$1$2$3");
  }
  
  function destroyMask(string){
    return string.replace(/\D/g,'').substring(0, 10);
  }

  /*Codigo Postal*/

  $("input[name='codigoPostal']").on("input", function(){
    let n = destroyMask(this.value);
      this.setAttribute("data-normalized", n);
    this.value = createMask(n);
  })
  
  function createMask(string){
    return string.replace(/(\d{2})(\d{3})(\d{2})/,"$1$2$3");
  }
  
  function destroyMask(string){
    return string.replace(/\D/g,'').substring(0, 10);
  }

  /* duracion */
 /*  $("input[name='duracion']").on("input", function(){
    let n = destroyMask(this.value);
      this.setAttribute("data-normalized", n);
    this.value = createMask(n);
  }) */
  
  function createMask(string){
    return string.replace(/(\d{2})(\d{3})(\d{2})/,"$1$2$3");
  }
  
  function destroyMask(string){
    return string.replace(/\D/g,'').substring(0, 10);
  }