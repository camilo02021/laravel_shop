    <section class="checkout spad">
        <div class="container">
            <div class="checkout__form">
                  <h4>Editar perfil</h4>
                 
                <form action="{{ route('user.update') }}" method="POST">
                   
                    @method('patch')
                    @csrf           
                    
                  <label for="name">Nombres</label>
                  <td><input id="name" type="text" name="name" value="{{ old('name', $user->name) }}" placeholder="Nombre" required></td>
 
                  <label for="email">Correo</label>
                  <td> <input id="email" type="text" name="email" value="{{ old('email', $user->email) }}" placeholder="Correo" required readonly>  </td>

                  <label for="direccion">Dirección</label>
                  <td><input id="direccion" type="text" name="direccion" value="{{ old('name', $user->direccion) }}" placeholder="Dirección" required></td>

                  <div> <small> Deja este espacio en blanco sino deseas hacer ningun cambio. </small> </div>

                  <label for="detalles">Contraseña</label>
                  <td><input id="password" type="password" name="password" placeholder="Contraseña"> </td>
                  
                  <td><input id="password-confirm" type="password" name="password_confirmation" placeholder="Confirmar Contraseña"></td>

                    <div>
                        <button type="submit" style="color:green" > <pre></pre> <strong><u> Actualizar </u> </strong> </button>
                    </div>
                </form>    

            </div>
        </div>
    </section>



