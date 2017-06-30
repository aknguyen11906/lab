$(document).ready(function() {
    $(".hamburger").click(function() {
        $("#menu").toggle(function() {
            $(".hamburger").text('☰');
        }, function() {
            var hamburgerText = $(".hamburger").text() === '☰' ? 'X' : '☰';
            $(".hamburger").text(hamburgerText);
        });


    });

    $(".see-more").click(function(e) {
        var index = e.target.id;
        $("#project-" + index).toggle({}, {});
        $("#project-detail-" + index).toggle({}, {});
    });

    $(".close-detail").click(function(e) {
        var index = e.target.id;
        $("#project-detail-" + index).toggle({}, {});
        $("#project-" + index).toggle({}, {});
    });

    /*Propose a project page */
    $('#contact_form').bootstrapValidator({
            // To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
            feedbackIcons: {
                valid: 'glyphicon glyphicon-ok',
                invalid: 'glyphicon glyphicon-remove',
                validating: 'glyphicon glyphicon-refresh'
            },
            fields: {
                project_name: {
                    validators: {
                        notEmpty: {
                            message: 'Please supply project name'
                        }
                    }
                },
                description: {
                    validators: {
                        notEmpty: {
                            message: 'Please supply description of project'
                        }
                    }
                },
                organization: {
                    validators: {
                        notEmpty: {
                            message: 'Please supply name of Organization/Companies/Users'
                        }
                    }
                },
                scope: {
                    validators: {
                        notEmpty: {
                            message: 'Please select one scope'
                        }
                    }
                },
                agree: {
                    validators: {
                        notEmpty: {
                            message: 'You must agree with the terms and conditions'
                        }
                    }
                }
            }
        })
        .on('success.form.bv', function(e) {
            $('#success_message').slideDown({ opacity: "show" }, "slow") // Do something ...
            $('#contact_form').data('bootstrapValidator').resetForm();

            // Prevent form submission
            e.preventDefault();

            // Get the form instance
            var $form = $(e.target);

            // Get the BootstrapValidator instance
            var bv = $form.data('bootstrapValidator');

            // Use Ajax to submit form data
            $.post($form.attr('action'), $form.serialize(), function(result) {
                console.log(result);
            }, 'json');
        });

});