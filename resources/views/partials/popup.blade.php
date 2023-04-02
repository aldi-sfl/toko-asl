<div class="popup">
    <div class="popup-content">
      <div class="avatar">
        <img src="https://via.placeholder.com/150x150" alt="User Avatar">
      </div>
      <div class="user-info">
        <h3>User Name</h3>
        <p>User Email</p>
      </div>
      <div class="actions">
        <a href="#">Edit Profile</a>
        <a href="#">Logout</a>
      </div>
    </div>
  </div>


  <style>
    .popup {
  position: fixed;
  top: 60px;
  right: 20px;
  background-color: white;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  z-index: 1;
  display: none;
}

.popup-content {
  padding: 20px;
  display: flex;
  align-items: center;
  gap: 20px;
}

.avatar img {
  width: 60px;
  height: 60px;
  border-radius: 50%;
  object-fit: cover;
}

.user-info h3 {
  margin: 0;
  font-size: 1.2rem;
}

.user-info p {
  margin: 0;
  font-size: 0.9rem;
  color: #666;
}

.actions {
  display: flex;
  flex-direction: column;
  gap: 10px;
  margin-top: 10px;
}

.actions a {
  color: #333;
  text-decoration: none;
  font-size: 0.9rem;
}

  </style>

  <script>
    const accountLink = document.querySelector('.account');
const popup = document.querySelector('.popup');

accountLink.addEventListener('click', function(e) {
  e.preventDefault();
  popup.style.display = 'block';
});

document.addEventListener('click', function(e) {
  if (!popup.contains(e.target) && e.target !== accountLink) {
    popup.style.display = 'none';
  }
});

  </script>