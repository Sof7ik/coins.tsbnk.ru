function coinQuantityButtonsHandler(event) {
    const target = event.currentTarget;
    const input = target.closest(".coin-item__quantity-wrapper").querySelector("input[type='number']");

    const role = target.dataset.quantityRole;

    if (role === "decrement") {
        if (parseInt(input.value) > 1) {
            input.value = parseInt(input.value) - 1;
        }
    }
    else if (role === "increment") {
        input.value = parseInt(input.value) + 1;
    }

    onQuantityChange(event);
}

function onQuantityChange(event) {
    // console.log("onQuantityChange");

    let target = null;

    // if function called not on input event but by button click
    if (event.currentTarget.tagName !== "INPUT") {
        target = event.currentTarget.closest(".coin-item__quantity-wrapper").querySelector("input[type='number']");
    }
    else {
        target = event.currentTarget;
    }

    const wrapper = target.closest(".coin-item__quantity-wrapper");

    // highlight qunatity change wrapper with red
    if (parseInt(target.value) === 0) {
        // target.value = 1;
        wrapper.classList.add('invalid');
    }
    else {
        wrapper.classList.remove('invalid');
    }

    // observe decrement button
    const decrementButton = wrapper.querySelector(".quantity-change-btn.decrement");

    if (parseInt(target.value) > 1) {
        decrementButton.disabled = false;
    }
    else {
        decrementButton.disabled = true;
    }
}

document.addEventListener("DOMContentLoaded", e => {
    document.querySelectorAll(".quantity-change-btn")
        .forEach(button => button.addEventListener('click', coinQuantityButtonsHandler));

    document.querySelectorAll(".coin-item .quantity-value")
        .forEach(input => {
            input.addEventListener('input', onQuantityChange);
        });
})