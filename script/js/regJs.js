$(function () {
    $('.button-checkbox').each(function () {

        // Settings
        var $widget = $(this),
            $button = $widget.find('button'),
            $checkbox = $widget.find('input:checkbox'),
            color = $button.data('color'),
            settings = {
                on: {
                    icon: 'glyphicon glyphicon-check'
                },
                off: {
                    icon: 'glyphicon glyphicon-unchecked'
                }
            };

        // Event Handlers
        $button.on('click', function () {
            $checkbox.prop('checked', !$checkbox.is(':checked'));
            $checkbox.triggerHandler('change');
            updateDisplay();
        });
        $checkbox.on('change', function () {
            updateDisplay();
        });

        // Actions
        function updateDisplay() {
            var isChecked = $checkbox.is(':checked');

            // Set the button's state
            $button.data('state', (isChecked) ? "on" : "off");

            // Set the button's icon
            $button.find('.state-icon')
                .removeClass()
                .addClass('state-icon ' + settings[$button.data('state')].icon);

            // Update the button's color
            if (isChecked) {
                $button
                    .removeClass('btn-default')
                    .addClass('btn-' + color + ' active');
            }
            else {
                $button
                    .removeClass('btn-' + color + ' active')
                    .addClass('btn-default');
            }
        }

        // Initialization
        function init() {

            updateDisplay();

            // Inject the icon if applicable
            if ($button.find('.state-icon').length == 0) {
                $button.prepend('<i class="state-icon ' + settings[$button.data('state')].icon + '"></i>');
            }
        }
        init();
    });
});
function check() {
    if(document.getElementById('password').value === document.getElementById('password_confirmation').value) {
        //document.getElementById('message').innerHTML = "Password Match";
        $('#message').html('Password match').css('color', 'green');
        document.getElementById('submit').disabled = false;
    } else {
        //document.getElementById('message').innerHTML = "Password don't match";
        $('#message').html('Password don\'t match').css('color', 'red');
        document.getElementById('submit').disabled = true;
    }
}
function checkSubmit(){
    alert('check submit');
    if(document.getElementById('password').value === document.getElementById('password_confirmation').value) {
        document.getElementById('submit').disabled = false;
        alert('equal');
    } else {
        document.getElementById('submit').disabled = true;
        alert('unequal');
    }
}