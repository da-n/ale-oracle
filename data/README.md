# Sample data

Sample data was originally generated at http://www.json-generator.com/ using the following variables. It has been tweaked to work with the application.

`users.json`

    [
        '{{repeat(20, 20)}}',
        {
            id: '{{index}}',
            guid: '{{guid}}',
            age: '{{numeric(20,40)}}',
            name: '{{firstName}} {{surname}}',
            gender: '{{gender}}',
            email: '{{email}}',
            ale: '{{numeric(0,19)}}'
        }
    ]

`ales.json`

    [
        '{{repeat(20, 20)}}',
        {
            id: '{{index}}',
            guid: '{{guid}}',
            name: '{{country}}',
            brewery: '{{company}}',
            abv: '{{numeric(3.0, 6.0, 0.0)}}',
            notes: '{{lorem(2, paragraphs)}}'
        }
    ]