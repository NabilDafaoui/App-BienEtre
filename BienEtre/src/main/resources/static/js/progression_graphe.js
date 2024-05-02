document.addEventListener('DOMContentLoaded', function () {

    const data_sante = {
    labels: ['Jan', 'Fev', 'Mars', 'Avril','Mai','Juin','Juil','Aout','Sept','Oct','Nov','Dec'],
    datasets: [{
        label: 'Santé',
        data: [5, 59, 80, 81, 56, 55, 40,68,10,18,79,99],
        fill: false,
        borderColor: 'rgb(75, 192, 192)',
        tension: 0.1
    }]
    };

    const config_sante = {
        type: 'line',
        data: data_sante,
    };

    var ctx = document.getElementById('sante_progression').getContext('2d');
    var sante_progression = new Chart(ctx, config_sante);

    const data_financier = {
        labels: ['Jan', 'Fev', 'Mars', 'Avril','Mai','Juin','Juil','Aout','Sept','Oct','Nov','Dec'],
        datasets: [{
            label: 'Financier',
            data: [65, 59, 80, 81, 56, 55, 40,68,10,18,79,99],
            fill: false,
            borderColor: 'rgb(75, 192, 192)',
            tension: 0.1
        }]
        };
    
        const config_financier = {
            type: 'line',
            data: data_financier,
        };
    
        var ctx = document.getElementById('financier_progression').getContext('2d');
        var financier_progression = new Chart(ctx, config_financier);    

        const data_social = {
            labels: ['Jan', 'Fev', 'Mars', 'Avril','Mai','Juin','Juil','Aout','Sept','Oct','Nov','Dec'],
            datasets: [{
                label: 'Social',
                data: [65, 59, 80, 81, 56, 55, 40,68,10,18,79,99],
                fill: false,
                borderColor: 'rgb(75, 192, 192)',
                tension: 0.1
            }]
            };
        
            const config_social = {
                type: 'line',
                data: data_social,
            };
        
            var ctx = document.getElementById('social_progression').getContext('2d');
            var social_progression = new Chart(ctx, config_social); 

            const data_pro = {
                labels: ['Jan', 'Fev', 'Mars', 'Avril','Mai','Juin','Juil','Aout','Sept','Oct','Nov','Dec'],
                datasets: [{
                    label: 'Professionnel',
                    data: [65, 59, 80, 81, 56, 55, 40,68,10,18,79,99],
                    fill: false,
                    borderColor: 'rgb(75, 192, 192)',
                    tension: 0.1
                }]
                };
            
                const config_pro = {
                    type: 'line',
                    data: data_pro,
                };
            
                var ctx = document.getElementById('pro_progression').getContext('2d');
                var pro_progression = new Chart(ctx, config_pro); 
});