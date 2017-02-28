function updatePeriod(newPeriod) {
    console.log(newPeriod);
    $.ajax({
        method: "POST",
        data: {action: newPeriod}
    });
}