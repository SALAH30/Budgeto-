// Default Form
$(document).ready(function() {
  $('#defaultForm').bootstrapValidator({
    message: 'Cette valeur n\'est pas valide',
    feedbackIcons: {
      valid: 'fa fa-check',
      invalid: 'fa fa-times',
      validating: 'fa fa-refresh'
    },
    fields: {
    nom1: {
        message: 'Le nom n\'est pas valide !',
        validators: {
          notEmpty: {
            message: 'Vous devez entrer votre nom !'
          },
          stringLength: {
            min: 2,
            max: 30,
            message: 'Le nom doit avoir au moins 2 characters et 30 characters au plus !'
          },
          regexp: {
            regexp: /^[a-zA-Z]+$/,
            message: 'Ce champ n\'admet que des caractères alphabétiques'
          }
        }
      },
      prenom: {
          message: 'Le prénom n\'est pas valide !',
          validators: {
              notEmpty: {
                  message: 'Vous devez entrer votre prénom !'
              },
              stringLength: {
                  min: 2,
                  max: 30,
                  message: 'Le prénom doit avoir au moins 2 characters et 30 characters au plus !'
              },
              regexp: {
                  regexp: /^[a-zA-Z]+$/,
                  message: 'Ce champ n\'admet que des caractères alphabétiques'
              }
          }
      },
        nss: {
            message: 'Le numéro de sécurité sociale n\'est pas valide !',
            validators: {
                notEmpty: {
                    message: 'Vous devez entrer votre numéro de sécurité sociale !'
                },
                regexp: {
                    regexp: /^[0-9]+$/,
                    message: 'Ce champ n\'admet que des nombres'
                }
            }
        },
      adressPhysique: {
        validators: {
          notEmpty: {
            message: 'Vous devez entrer votre adresse !'
          }
        }
      },
    email: {
        validators: {
            notEmpty: {
                message: 'Vous devez entrer votre adresse éléctronique !'
            },
            emailAddress: {
                message: 'Votre adresse n\'est pas valide !'
            }
        }
    },
    phoneNumber: {
        validators: {
            notEmpty: {
                message: 'Vous devez entrer votre numéro de téléphone !'
            },
            phone: {
                message: 'Votre numéro de téléphone n\'est pas valide !'
            }
        }
    },
        sexe: {
            validators: {
                notEmpty: {
                    message: 'Vous devez sélectionner votre sexe !'
                }
            }
        },
        datenaissance: {
            validators: {
                notEmpty: {
                    message: 'Vous devez entrer votre date de naissance !'
                }
            }
        },
        regexp: /^[a-zA-Z0-9_\.]+$/,
        message: 'Ce champ n\'admet que des caractères alphabétiques, nombres, points et tiret bas ( _ )'
    }
  }
    },
    password: {
    validators: {
        notEmpty: {
            message: 'The password is required and can\'t be empty'
        },
        identical: {
            field: 'confirmPassword',
                essage: 'The password and its confirm are not the same'
        }
    }
},
confirmPassword: {
    validators: {
        notEmpty: {
            message: 'The confirm password is required and can\'t be empty'
        },
        identical: {
            field: 'password',
                message: 'The password and its confirm are not the same'
        }
    }
},

      acceptTerms: {
        validators: {
          notEmpty: {
            message: 'Vous devez confirmer vos modifications'
          }
        }
      },
    }
  });
});

$(document).ready(function() {
    $('#defaultForm1').bootstrapValidator({
        message: 'Cette valeur n\'est pas valide',
        feedbackIcons: {
            valid: 'fa fa-check',
            invalid: 'fa fa-times',
            validating: 'fa fa-refresh'
        },
        fields: {
            username: {
                message: 'Le nom d\'iutilisateur n\'est pas valide !',
                validators: {
                    notEmpty: {
                        message: 'Vous devez entrer votre nom d\'utilisateur !'
                    },
                    stringLength: {
                        min: 6,
                        max: 30,
                        message: 'Le nom d\'utilisateur doit avoir au moins 6 characters et 30 characters au plus !'
                    },
                    regexp: {
                        regexp: /^[a-zA-Z0-9_\.]+$/,
                        message: 'Ce champ n\'admet que des caractères alphabétiques, nombres, points et tiret bas ( _ )'
                    }
                }
            },
            password: {
                validators: {
                    notEmpty: {
                        message: 'The password is required and can\'t be empty'
                    },
                    identical: {
                        field: 'confirmPassword',
                        essage: 'The password and its confirm are not the same'
                    }
                }
            },
            confirmPassword: {
                validators: {
                    notEmpty: {
                        message: 'The confirm password is required and can\'t be empty'
                    },
                    identical: {
                        field: 'password',
                        message: 'The password and its confirm are not the same'
                    }
                }
            },
            acceptTerms: {
                validators: {
                    notEmpty: {
                        message: 'Vous devez confirmer vos modifications'
                    }
                }
            },
        }
    });
});

$(document).ready(function() {
    $('#defaultForm2').bootstrapValidator({
        message: 'Cette valeur n\'est pas valide',
        feedbackIcons: {
            valid: 'fa fa-check',
            invalid: 'fa fa-times',
            validating: 'fa fa-refresh'
        },
        fields: {
            specialite: {
                validators: {
                    notEmpty: {
                        message: 'Vous devez au moins sélectionner une spécialité !'
                    }
                }
            },
        }
    });
});

$(document).ready(function() {
    $('#defaultFormDossier').bootstrapValidator({
        message: 'Cette valeur n\'est pas valide',
        feedbackIcons: {
            valid: 'fa fa-check',
            invalid: 'fa fa-times',
            validating: 'fa fa-refresh'
        },
        fields: {
            nomMed: {
                message: 'Le nom n\'est pas valide !',
                validators: {
                    notEmpty: {
                        message: 'Vous devez entrer le nom du médecin suiveur !'
                    },
                    stringLength: {
                        min: 2,
                        max: 30,
                        message: 'Le nom doit avoir au moins 2 characters et 30 characters au plus !'
                    },
                    regexp: {
                        regexp: /^[a-zA-Z]+$/,
                        message: 'Ce champ n\'admet que des caractères alphabétiques'
                    }
                }
            },
            typePat: {
                validators: {
                    notEmpty: {
                        message: 'Vous devez au moins sélectionner un type de ce patient !'
                    }
                }
            },
            situation: {
                validators: {
                    notEmpty: {
                        message: 'Vous devez sélectionner la situation du pation !'
                    }
                }
            },
            typepatient: {
                validators: {
                    notEmpty: {
                        message: 'Vous devez au moins sélectionner une spécialité !'
                    }
                }
            },
            poids: {
                message: 'Le poids n\'est pas valide !',
                validators: {
                    notEmpty: {
                        message: 'Vous devez entrer le poids du patient !'
                    },
                    regexp: {
                        regexp: /^[0-9]+$/,
                        message: 'Ce champ n\'admet que des nombres'
                    }
                }
            },
            mobilite: {
                validators: {
                    notEmpty: {
                        message: 'Vous devez déterminer la situation mobile du patient !'
                    }
                }
            },
            groupS: {
                validators: {
                    notEmpty: {
                        message: 'Vous devez choisir un groupe sanguin !'
                    }
                }
            },
            tension: {
                message: 'La tension n\'est pas valide !',
                validators: {
                    notEmpty: {
                        message: 'Vous devez entrer la tension du patient !'
                    },
                    regexp: {
                        regexp: /^[0-9]+$/,
                        message: 'Ce champ n\'admet que des nombres'
                    }
                }
            },
            tauxGli: {
                message: 'La tension n\'est pas valide !',
                validators: {
                    notEmpty: {
                        message: 'Vous devez entrer le taux du glucémie du patient !'
                    },
                    regexp: {
                        regexp: /^[0-9]+$/,
                        message: 'Ce champ n\'admet que des nombres'
                    }
                }
            },
            typeDiab: {
                validators: {
                    notEmpty: {
                        message: 'Vous devez choisir un type !'
                    }
                }
            },
            denutrition: {
                validators: {
                    notEmpty: {
                        message: 'Vous devez préciser l\'état du patient !'
                    }
                }
            },
            depression: {
                validators: {
                    notEmpty: {
                        message: 'Vous devez préciser l\'état du patient !'
                    }
                }
            },
            problemesmed: {
                validators: {
                    notEmpty: {
                        message: 'Vous devez préciser l\'état du patient !'
                    }
                }
            },
            chutes: {
                validators: {
                    notEmpty: {
                        message: 'Vous devez préciser l\'état du patient !'
                    }
                }
            },
            acceptTerms: {
                validators: {
                    notEmpty: {
                        message: 'Vous devez confirmer vos modifications'
                    }
                }
            },
        }
    });
});

function activerDiab() {
    if(defaultFormDossier.diabetique.checked == true){
        defaultFormDossier.tauxGli_formD.disabled=false;
        defaultFormDossier.typeDiab_formD.disabled=false;
    }
    else{
        defaultFormDossier.tauxGli_formD.disabled=true;
        defaultFormDossier.tauxGli_formD.value="";
        defaultFormDossier.typeDiab_formD.disabled=true;
        defaultFormDossier.typeDiab_formD.value="";
    }

}

function activerHyp() {
    if(defaultFormDossier.hiperTension.checked == true){
        defaultFormDossier.tension_formD.disabled=false;
    }
    else{
        defaultFormDossier.tension_formD.disabled=true;
        defaultFormDossier.tension_formD.value="";
    }

}
var i=0;
function showDiv() {
    if (i==0)
    {
        i=1;
        infoArea.style.display = "block";
    }else 
    {
        i=0;
        infoArea.style.display = "none";
    }
}

function activerAge() {
    if(defaultFormDossier.ageP.checked == true){
        defaultFormDossier.denutritionOUI_form1.disabled=false;
        defaultFormDossier.denutritionNON_form1.disabled=false;
        defaultFormDossier.depressionOUI_form1.disabled=false;
        defaultFormDossier.depressionNON_form1.disabled=false;
        defaultFormDossier.problemesmedOUI_form1.disabled=false;
        defaultFormDossier.problemesmedNON_form1.disabled=false;
        defaultFormDossier.chutesOUI_form1.disabled=false;
        defaultFormDossier.chutesNON_form1.disabled=false;
    }
    else{
        defaultFormDossier.denutritionOUI_form1.disabled=true;
        defaultFormDossier.denutritionOUI_form1.checked=false;
        defaultFormDossier.denutritionNON_form1.disabled=true;
        defaultFormDossier.denutritionNON_form1.checked=false;
        defaultFormDossier.depressionOUI_form1.disabled=true;
        defaultFormDossier.depressionOUI_form1.checked=false;
        defaultFormDossier.depressionNON_form1.disabled=true;
        defaultFormDossier.depressionNON_form1.checked=false;
        defaultFormDossier.problemesmedOUI_form1.disabled=true;
        defaultFormDossier.problemesmedOUI_form1.checked=false;
        defaultFormDossier.problemesmedNON_form1.disabled=true;
        defaultFormDossier.problemesmedNON_form1.checked=false;
        defaultFormDossier.chutesOUI_form1.disabled=true;
        defaultFormDossier.chutesOUI_form1.checked=false;
        defaultFormDossier.chutesNON_form1.disabled=true;
        defaultFormDossier.chutesNON_form1.checked=false;
    }
}

$(document).ready(function() {
  $('#movieForm').bootstrapValidator({
    feedbackIcons: {
      valid: 'fa fa-check',
      invalid: 'fa fa-times',
      validating: 'fa fa-reload'
    },
    fields: {
      title: {
        group: '.col-md-8',
        validators: {
          notEmpty: {
            message: 'The title is required'
          },
          stringLength: {
            max: 200,
            message: 'The title must be less than 200 characters long'
          }
        }
      },
      genre: {
        group: '.col-md-4',
        validators: {
          notEmpty: {
            message: 'The genre is required'
          }
        }
      },
        director: {
          group: '.col-md-4',
          validators: {
            notEmpty: {
              message: 'The director name is required'
            },
            stringLength: {
              max: 80,
              message: 'The director name must be less than 80 characters long'
            }
          }
        },
        writer: {
          group: '.col-md-4',
          validators: {
            notEmpty: {
              message: 'The writer name is required'
            },
            stringLength: {
              max: 80,
              message: 'The writer name must be less than 80 characters long'
            }
          }
        },
        producer: {
          group: '.col-md-4',
          validators: {
            notEmpty: {
              message: 'The producer name is required'
            },
            stringLength: {
              max: 80,
              message: 'The producer name must be less than 80 characters long'
            }
          }
        },
        website: {
          group: '.col-md-6',
          validators: {
            notEmpty: {
              message: 'The website address is required'
            },
            uri: {
              message: 'The website address is not valid'
            }
          }
        },
        trailer: {
          group: '.col-md-6',
          validators: {
            notEmpty: {
              message: 'The trailer link is required'
            },
            uri: {
              message: 'The trailer link is not valid'
            }
          }
        },
      review: {
        // The group will be set as default (.form-group)
        validators: {
          stringLength: {
            max: 500,
            message: 'The review must be less than 500 characters long'
          }
        }
      },

    }
  });
});