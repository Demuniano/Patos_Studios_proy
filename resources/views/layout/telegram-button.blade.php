<style>
.telegram-button {
  position: fixed;
  bottom: 20px;
  right: 20px;
  z-index: 100;
  background-color: #334756;
  color: white;
  padding: 10px;
  border-radius: 5px;
  cursor: pointer;
}

.telegram-button img {
  width: 30px;
  height: 30px;
}
</style>

<div class="telegram-button">
  <img src="{{asset('/images/icons/telegram.png')}}" alt="Icono de Telegram">
</div>

<script>
const telegramButton = document.querySelector('.telegram-button');

telegramButton.addEventListener('click', () => {
  const telegramMessage = 'Hola, me gustaría comprar un vape por este medio.';
  const mensajeCodificado = encodeURIComponent(telegramMessage);
  const telegramURL = `tg://resolve?domain=Cuak_bot&text=${mensajeCodificado}`;
  window.open(telegramURL, '_blank');
});
</script>
