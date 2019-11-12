
var simple_chart_configlinea = {
	chart: {
		container: "#OrganiseChart-simpleLinea",
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
