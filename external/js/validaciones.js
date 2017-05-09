$(document).ready(function() {
    // Generate a simple captcha
    function randomNumber(min, max) {
        return Math.floor(Math.random() * (max - min + 1) + min);
    };
    $('#captchaOperation').html([randomNumber(1, 100), '+', randomNumber(1, 200), '='].join(' '));

    $('#add_matricula').formValidation({
        message: 'This value is not valid',
        icon: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            id_alumnos: {
                //row: '.col-sm-12',
                message: 'The username is not valid',
                validators: {
                    notEmpty: {
                        message: 'Seleccione un alumno'
                    },
                    stringLength: {
                        message: 'Seleccione un alumno'
                    }
                }
            },

            id_cursos: {
                //row: '.col-sm-12',
                message: 'The username is not valid',
                validators: {
                    notEmpty: {
                        message: 'Seleccione un curso'
                    },
                    stringLength: {
                        message: 'Seleccione un curso'
                    }
                }
            },
        }
    });

    $('#add_rubros').formValidation({
        message: 'This value is not valid',
        icon: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            nombre: {
                //row: '.col-sm-12',
                message: 'The username is not valid',
                validators: {
                    notEmpty: {
                        message: 'Ingrese nombre del rubro'
                    },
                    stringLength: {
                        message: 'Ingrese nombre del rubro'
                    }
                }
            },

            monto: {
                //row: '.col-sm-12',
                message: 'The username is not valid',
                validators: {
                    notEmpty: {
                        message: 'Ingrese monto del rubro'
                    },
                    stringLength: {
                        message: 'Ingrese monto del rubro'
                    }
                }
            },
        }
    });

    $('#add_pagar_rubros').formValidation({
        message: 'This value is not valid',
        icon: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            id_alumnos: {
                //row: '.col-sm-12',
                message: 'The username is not valid',
                validators: {
                    notEmpty: {
                        message: 'Seleccione una opción'
                    },
                    stringLength: {
                        message: 'Seleccione una opción'
                    }
                }
            },

            id_rubros: {
                //row: '.col-sm-12',
                message: 'The username is not valid',
                validators: {
                    notEmpty: {
                        message: 'Seleccione una opción'
                    },
                    stringLength: {
                        message: 'Seleccione una opción'
                    }
                }
            },

            monto: {
                //row: '.col-sm-12',
                message: 'The username is not valid',
                validators: {
                    notEmpty: {
                        message: 'Seleccione una opción'
                    },
                    stringLength: {
                        message: 'Seleccione una opción'
                    }
                }
            },

            cantidad: {
                //row: '.col-sm-12',
                message: 'The username is not valid',
                validators: {
                    notEmpty: {
                        message: 'Ingrese cantidad a pagar'
                    },
                    stringLength: {
                        message: 'Ingrese cantidad a pagar'
                    }
                }
            },
        }
    });

    $('#add_usuario').formValidation({
        message: 'This value is not valid',
        icon: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            nombres: {
                //row: '.col-sm-12',
                message: 'The username is not valid',
                validators: {
                    notEmpty: {
                        message: 'Ingrese sus nombres'
                    },
                    stringLength: {
                        message: 'Ingrese sus nombres'
                    }
                }
            },

            usuario: {
                //row: '.col-sm-12',
                message: 'The username is not valid',
                validators: {
                    notEmpty: {
                        message: 'Ingrese su usuario para iniciar sesión'
                    },
                    stringLength: {
                        message: 'Ingrese su usuario para iniciar sesión'
                    }
                }
            },

            password: {
                //row: '.col-sm-12',
                message: 'The username is not valid',
                validators: {
                    notEmpty: {
                        message: 'Ingrese su contraseña'
                    },
                    stringLength: {
                        message: 'Ingrese su contraseña'
                    }
                }
            },
        }
    });

    $('#add_curso').formValidation({
        message: 'This value is not valid',
        icon: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            nombre: {
                //row: '.col-sm-12',
                message: 'The username is not valid',
                validators: {
                    notEmpty: {
                        message: 'Ingrese nombre del curso'
                    },
                    stringLength: {
                        message: 'Ingrese nombre del curso'
                    }
                }
            },
        }
    });

    $('#add_asignatura').formValidation({
        message: 'This value is not valid',
        icon: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            id_cursos: {
                //row: '.col-sm-12',
                message: 'The username is not valid',
                validators: {
                    notEmpty: {
                        message: 'Seleccione una opción'
                    },
                    stringLength: {
                        message: 'Seleccione una opción'
                    }
                }
            },
            nombre: {
                //row: '.col-sm-12',
                message: 'The username is not valid',
                validators: {
                    notEmpty: {
                        message: 'Ingrese nombre asignatura'
                    },
                    stringLength: {
                        message: 'Ingrese nombre asignatura'
                    }
                }
            },
        }
    });

    $('#add_alumno').formValidation({
        message: 'This value is not valid',
        icon: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            cedula: {
                //row: '.col-sm-12',
                message: 'The username is not valid',
                validators: {
                    notEmpty: {
                        message: 'Ingrese cédula alumno'
                    },
                    stringLength: {
                        message: 'Ingrese cédula alumno'
                    }
                }
            },
            nombres: {
                //row: '.col-sm-12',
                message: 'The username is not valid',
                validators: {
                    notEmpty: {
                        message: 'Ingrese nombres'
                    },
                    stringLength: {
                        message: 'Ingrese nombres'
                    }
                }
            },
            apellidos: {
                //row: '.col-sm-12',
                message: 'The username is not valid',
                validators: {
                    notEmpty: {
                        message: 'Ingrese apellidos'
                    },
                    stringLength: {
                        message: 'Ingrese apellidos'
                    }
                }
            },
            telefono: {
                //row: '.col-sm-12',
                message: 'The username is not valid',
                validators: {
                    notEmpty: {
                        message: 'Ingrese telefono'
                    },
                    stringLength: {
                        message: 'Ingrese telefono'
                    }
                }
            },
            datepicker: {
                //row: '.col-sm-12',
                message: 'The username is not valid',
                validators: {
                    notEmpty: {
                        message: 'Seleccione una fecha'
                    },
                    stringLength: {
                        message: 'Seleccione una fecha'
                    }
                }
            },
            correo: {
                //row: '.col-sm-12',
                message: 'The username is not valid',
                validators: {
                    notEmpty: {
                        message: 'Ingrese correo'
                    },
                    stringLength: {
                        message: 'Ingrese correo'
                    }
                }
            },
            direccion: {
                //row: '.col-sm-12',
                message: 'The username is not valid',
                validators: {
                    notEmpty: {
                        message: 'Ingrese direccion'
                    },
                    stringLength: {
                        message: 'Ingrese direccion'
                    }
                }
            },
        }
    });

    $('#alumno_asignaturas').formValidation({
        message: 'This value is not valid',
        icon: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            id_alumnos: {
                //row: '.col-sm-12',
                message: 'The username is not valid',
                validators: {
                    notEmpty: {
                        message: 'Seleccione alumno'
                    },
                    stringLength: {
                        message: 'Seleccione alumno'
                    }
                }
            },

            id_cursos: {
                //row: '.col-sm-12',
                message: 'The username is not valid',
                validators: {
                    notEmpty: {
                        message: 'Seleccione curso'
                    },
                    stringLength: {
                        message: 'Seleccione curso'
                    }
                }
            },

            id_asignaturas: {
                //row: '.col-sm-12',
                message: 'The username is not valid',
                validators: {
                    notEmpty: {
                        message: 'Seleccione asignatura'
                    },
                    stringLength: {
                        message: 'Seleccione asignatura'
                    }
                }
            },
        }
    });

    $('#buscar_alumno').formValidation({
        message: 'This value is not valid',
        icon: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            cedula: {
                //row: '.col-sm-12',
                message: 'The username is not valid',
                validators: {
                    notEmpty: {
                        message: 'Ingrese cédula del alumno'
                    },
                    stringLength: {
                        message: 'Ingrese cédula del alumno'
                    }
                }
            },

            id_cursos: {
                //row: '.col-sm-12',
                message: 'The username is not valid',
                validators: {
                    notEmpty: {
                        message: 'Seleccione curso'
                    },
                    stringLength: {
                        message: 'Seleccione curso'
                    }
                }
            },
        }
    });

    $('#add_quimestre').formValidation({
        message: 'This value is not valid',
        icon: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            id_alumnos: {
                //row: '.col-sm-12',
                message: 'The username is not valid',
                validators: {
                    notEmpty: {
                        message: 'Seleccione una opción'
                    },
                    stringLength: {
                        message: 'Seleccione una opción'
                    }
                }
            },

            quimestre: {
                //row: '.col-sm-12',
                message: 'The username is not valid',
                validators: {
                    notEmpty: {
                        message: 'Seleccione una opción'
                    },
                    stringLength: {
                        message: 'Seleccione una opción'
                    }
                }
            },

            id_asignaturas: {
                //row: '.col-sm-12',
                message: 'The username is not valid',
                validators: {
                    notEmpty: {
                        message: 'Seleccione una opción'
                    },
                    stringLength: {
                        message: 'Seleccione una opción'
                    }
                }
            },

            parcial: {
                //row: '.col-sm-12',
                message: 'The username is not valid',
                validators: {
                    notEmpty: {
                        message: 'Seleccione una opción'
                    },
                    stringLength: {
                        message: 'Seleccione una opción'
                    }
                }
            },

            nota: {
                //row: '.col-sm-12',
                message: 'The username is not valid',
                validators: {
                    notEmpty: {
                        message: 'Ingrese nota'
                    },
                    stringLength: {
                        message: 'Ingrese nota'
                    }
                }
            },
        }
    });

});