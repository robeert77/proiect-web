function loadStoryData(storyId) {
    $.ajax({
        url: showStoryUrl + storyId, 
        type: 'GET',
        success: function (data) {
            $('#modalContent').html(data);
            $('#storyModal').modal('show');
        },
        error: function () {
            alert('Error loading story details.');
        }
    });
}