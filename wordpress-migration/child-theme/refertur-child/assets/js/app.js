document.addEventListener('click',function(e){
  const btn=e.target.closest('[data-open-messenger]');
  if(!btn)return;
  const type=btn.dataset.type||'tg';
  const text=encodeURIComponent(btn.dataset.message||'Запрос с сайта refertur.net');
  const url=type==='wa'
    ? `https://wa.me/77054384888?text=${text}`
    : `https://t.me/realhikaz?text=${text}`;
  window.open(url,'_blank','noopener');
});
