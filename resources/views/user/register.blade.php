<div class="modal fade" id="modalregist" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="form-box">
                <form class="form" action="/register" method="POST">
                    @csrf
                    <span class="title">Register</span>
                    <span class="subtitle">Daftarkan akunmu untuk membuka berbagai fitur</span>
                    <div class="form-container">
                            <input name="name" id="name" type="text" class="input" placeholder="Full Name">
                            <input name="email" id="email" type="email" class="input" placeholder="Email">
                            <input name="password" id="password" type="password" class="input" placeholder="Password">
                    </div>
                    <button>Daftar</button>
                </form>
                <div class="form-section">
                  <p>Sudah punya akun? <a href="" data-bs-toggle="modal" data-bs-target="#modallogin">Log in</a> </p>
                </div>
                </div>
                
        </div>
        
      </div>
    </div>
  </div>



  <style>
    .form-box {
  max-width: 100%;
  background: #f1f7fe;
  overflow: hidden;
  border-radius: 16px;
  color: #010101;
}

.form {
  position: relative;
  display: flex;
  flex-direction: column;
  padding: 32px 24px 24px;
  gap: 16px;
  text-align: center;
}

/*Form text*/
.title {
  font-weight: bold;
  font-size: 1.6rem;
}

.subtitle {
  font-size: 1rem;
  color: #666;
}

/*Inputs box*/
.form-container {
  overflow: hidden;
  border-radius: 8px;
  background-color: #fff;
  margin: 1rem 0 .5rem;
  width: 100%;
}

.input {
  background: none;
  border: 0;
  outline: 0;
  height: 40px;
  width: 100%;
  border-bottom: 1px solid #eee;
  font-size: .9rem;
  padding: 8px 15px;
}

.form-section {
  padding: 16px;
  font-size: .85rem;
  background-color: #e0ecfb;
  box-shadow: rgb(0 0 0 / 8%) 0 -1px;
}

.form-section a {
  font-weight: bold;
  color: #0066ff;
  transition: color .3s ease;
}

.form-section a:hover {
  color: #005ce6;
  text-decoration: underline;
}

/*Button*/
.form button {
  background-color: #0066ff;
  color: #fff;
  border: 0;
  border-radius: 24px;
  padding: 10px 16px;
  font-size: 1rem;
  font-weight: 600;
  cursor: pointer;
  transition: background-color .3s ease;
}

.form button:hover {
  background-color: #005ce6;
}
  </style>
  