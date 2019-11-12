
    var chart_config2 = {
        chart: {
            container: "#collapsable-example2",

            animateOnInit: true,

            node: {
                collapsable: true
            },
            animation: {
                nodeAnimation: "easeOutBounce",
                nodeSpeed: 700,
                connectorsAnimation: "bounce",
                connectorsSpeed: 700
            }
        },
        nodeStructure: {
          image: "/arboles_1/img/lana.png",
          childrenDropLevel: 1,
          children: [
            {
              image: "/arboles_1/img/malory.png"

            },
            {
              image: "/arboles_1/img/malory.png"

            },
            {
              image: "/arboles_1/img/malory.png"

            },
            {
              image: "/arboles_1/img/malory.png"

            },
            {
              image: "/arboles_1/img/malory.png"

            },
            {
              image: "/arboles_1/img/malory.png"

            },
            {
              image: "/arboles_1/img/malory.png"

            },
            {
              image: "/arboles_1/img/malory.png"

            },
            {
              image: "/arboles_1/img/malory.png"

            },
            {
              image: "/arboles_1/img/malory.png"

            },
            {
              image: "/arboles_1/img/malory.png"

            },
            {
              image: "/arboles_1/img/malory.png"

            }
          ]
        }
    };
    var simple_chart_config2 = {
        chart: {
            container: "#OrganiseChart-simple2",
            hideRootNode: true,
            connectors: {
                type: 'step',
                style: {
                    "arrow-end": "classic-wide-long",
                    "stroke-width": 2,
                    "stroke": "#665B57"
                }
            },
            node: {
                collapsable: true
            },
            animation: {
                nodeAnimation: "easeOutBounce",
                nodeSpeed: 700,
                connectorsAnimation: "bounce",
                connectorsSpeed: 700
            }
        },

        nodeStructure: {
            text: { name: "Parent node" },
            children: [
                {
                    HTMLclass: "timeline main-date",
                    text: { desc: "", name: "Fecha.1" },
                    children: [
                        {
                            text: { name: "Evento.1" }
                        },
                        {
                            text: { name: "Evento.2" }
                        },
                        {
                            text: { name: "Evento.3" }
                        },
                        {
                            text: { name: "Evento.4" }
                        }
                    ]
                },
                {
                    HTMLclass: "main-date",
                    text: { name: "Fecha.2" },
                    //collapsed: true,
                    children: [
                        {
                            text: { name: "Evento.1" }
                        },
                        {
                            text: { name: "Evento.2" }
                        }
                    ]
                },
                {
                    HTMLclass: "main-date",
                    text: { name: "Fecha.3" },
                    children: [
                        {
                            text: { name: "Evento.1" }
                        },
                        {
                            text: { name: "Evento.2" }
                        },
                        {
                            text: { name: "Evento.3" }
                        }
                    ]
                },
                {
                    HTMLclass: "main-date",
                    text: { name: "Fecha.4" },
                    children: [
                        {
                            text: { name: "Evento.1" }
                        },
                        {
                            text: { name: "Evento.2" }
                        },
                        {
                            text: { name: "Evento.3" }
                        },
                        {
                            text: { name: "Evento.4" }
                        }
                    ]
                }
            ]
        }
    };


/* Array approach
    var config = {
        container: "#collapsable-example",

        animateOnInit: true,

        node: {
            collapsable: true
        },
        animation: {
            nodeAnimation: "easeOutBounce",
            nodeSpeed: 700,
            connectorsAnimation: "bounce",
            connectorsSpeed: 700
        }
    },
    malory = {
        image: "img/malory.png"
    },

    lana = {
        parent: malory,
        image: "img/lana.png"
    }

    figgs = {
        parent: lana,
        image: "img/figgs.png"
    }

    sterling = {
        parent: malory,
        childrenDropLevel: 1,
        image: "img/sterling.png"
    },

    woodhouse = {
        parent: sterling,
        image: "img/woodhouse.png"
    },

    pseudo = {
        parent: malory,
        pseudo: true
    },

    cheryl = {
        parent: pseudo,
        image: "img/cheryl.png"
    },

    pam = {
        parent: pseudo,
        image: "img/pam.png"
    },

    chart_config = [config, malory, lana, figgs, sterling, woodhouse, pseudo, pam, cheryl];

*/
