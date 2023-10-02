<style>
    table {
        width: 100%;
        border-collapse: collapse;
    }
    th, td {
        border: 1px solid black;
        padding: 15px;
        text-align: left;
    }
    th {
        background-color: #f2f2f2;
    }
</style>

<table>
    <!-- Capçalera de la taula -->
    <thead>
    <tr>
        <th>Prova</th>
        <th>Marca</th>
        <th>Atleta</th>
        <th>Natalici</th>
        <th>Club</th>
        <th>Data</th>
        <th>Lloc</th>
    </tr>
    </thead>
    <!-- Cos de la taula -->
    <tbody>
    <?php foreach ($records as $prova => $record) { ?>
        <tr>
            <td><?= $prova ?></td>
            <td><?= $record['marca']; ?></td>
            <td><?= $record['atleta']; ?></td>
            <td><?= $record['natalici']; ?></td>
            <td><?= $record['club']; ?></td>
            <td><?= $record['data']; ?></td>
            <td><?= $record['lloc']; ?></td>
        </tr>
    <?php } ?>
    </tbody>
</table>