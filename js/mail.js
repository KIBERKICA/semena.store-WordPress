document.addEventListener('itc.successSendForm', (e) => {
    const el = e.target.closest('.form-container').querySelector('.form-success');
    el.classList.remove('form-success_hide');
  });
  // при клике на .form-success__btn
  document.querySelector('.form-success__btn').addEventListener('click', (e) => {
    const el = e.target.closest('.form-container').querySelector('form');
    const form = ItcSubmitForm.getOrCreateInstance(el);
    form.reset();
    e.target.closest('.form-container').querySelector('.form-success').classList.add('form-success_hide');
  });