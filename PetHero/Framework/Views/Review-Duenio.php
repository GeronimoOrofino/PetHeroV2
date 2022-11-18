<main>
    
    <form action="<?php echo FRONT_ROOT ?> Reserva/review_y_puntos">
        
        <h4>Ingrese el id de la reserva que desea desea dejar su review </h4>
        <input type="number" name = "id" >
        
        <h4>Ingrese su review </h4>
        <textarea  name= "review" cols=50 row=10 maxlength=150>  </textarea>
        
        <h4>Califique a este Guarian</h4>
        <select name="puntos" >Raza y/o Especie
            <option value=5>5 Estrellas</option>
            <option value=4>4 Estrellas</option>
            <option value=3>3 Estrellas</option>
            <option value=2>2 Estrellas</option>
            <option value=1>1 Estrellas</option>
     
        </select>

        <button type = submit>Aceptar</button>
    </form>

</main>