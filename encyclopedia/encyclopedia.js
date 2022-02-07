function onCategoryChange(event) {
    const target = event.currentTarget;

    if (activeBtn = document.querySelector('.filter-tabs__button.active'))
        activeBtn.classList.remove('active');

    target.classList.add('active');
}

document.addEventListener("DOMContentLoaded", e => {
    document.querySelectorAll('.filter-tabs__button').forEach(button => {
        button.addEventListener('click', onCategoryChange);
    })
})