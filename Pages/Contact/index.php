<section id="Contact-Page">

  <div class="container my-5">
    <div class="row justify-content-center">
      <div class="col-lg-9">
        <h1 class="mb-3">Contato</h1>
        <form action="./?Page=Mail" method="post" id="form-send-email">
          <div class="row g-3">
            <div class="col-md-6">
              <label for="your-name" class="form-label">Seu Nome: <span class="text-danger">*</span></label>
              <input type="text" class="form-control" id="your-name" name="your-name" required>
            </div>
            <div class="col-md-6">
              <label for="your-surname" class="form-label">Seu Sobrenome: <span class="text-danger">*</span></label>
              <input type="text" class="form-control" id="your-surname" name="your-surname" required>
            </div>
            <div class="col-md-6">
              <label for="your-email" class="form-label">Seu E-mail: <span class="text-danger">*</span></label>
              <input type="email" class="form-control" id="your-email" name="your-email" required>
            </div>
            <div class="col-md-6">
              <label for="your-phone" class="form-label">Seu Telefone: <span class="text-danger">*</span></label>
              <input type="phone" class="form-control" id="your-phone" name="your-phone" required>
            </div>
            <div class="col-md-12">
              <label for="your-subject" class="form-label">Assunto:</label>
              <input type="text" class="form-control" id="your-subject" name="your-subject">
            </div>
            <div class="col-12">
              <label for="your-message" class="form-label">Descreva o máximo possível sobre o assunto do contato: <span class="text-danger">*</span></label>
              <textarea class="form-control" id="your-message" name="your-message" rows="5" required></textarea>
            </div>
            <div class="col-12">
              <div class="row">
                <div class="col-md-6">
                  <button data-res="" name="button-send-email" type="submit" class="btn btn-dark w-100 fw-bold" >
                    <i class="fa-solid fa-envelope"></i> Enviar
                  </button>
                </div>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>

</section>